<?php //date_default_timezone_set("Asia/Kolkata");
define("SLIDER_IMAGE_PATH_DISPLAY","images/slider/");
define("SLIDER_IMAGE_PATH_UPLOAD","../images/slider/");
define("MAIN_HOST","localhost");
define("MAIN_DBNAME","syntegow_blessing");
define("MAIN_USERNAME","syntegow_general");
define("MAIN_PASSWORD","clnt1!2@");
define("DB_DSN",'mysql:host='.MAIN_HOST.';dbname='.MAIN_DBNAME.'');
error_reporting(E_ALL);

class configDatabase
{
    public static $DB_DSN = DB_DSN; // set host name and database name
    public static $DB_USERNAME = MAIN_USERNAME; // set user name
    public static $DB_PASSWORD = MAIN_PASSWORD; // set password
}
class db extends configDatabase
{
    public $isConnected;
    protected $datab;
    public function __construct()
    {
        $this->isConnected = true;

        try 
        { 
            $this->datab = new PDO(parent::$DB_DSN, parent::$DB_USERNAME, parent::$DB_PASSWORD); 
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } 
        catch(PDOException $e) 
        { 
            $this->isConnected = false;
            throw new Exception($e->getMessage());
        }
    }
    public function Disconnect()
    {
        $this->datab = null;
        $this->isConnected = false;
    }
    public function queryRow($query)
    {
        try
        {
            $stmt = $this->datab->prepare($query); 
            $stmt->execute();
            return true; 
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
            return false;
        }
    }
    public function getRow($query, $params=array())
    {
        try
        { 
            $stmt = $this->datab->prepare($query); 
            $stmt->execute($params);
            return $stmt->fetch();  
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
        }
    }
	public function numRow($query, $params=array())
    {
        try
        {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();

        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
        }
    }
    public function getRows($query, $params=array()){
        try
        { 
            $stmt = $this->datab->prepare($query); 
            $stmt->execute($params);
            return $stmt->fetchAll();       
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
        }       
    }
    public function insertRow($query, $params){
        try
        {           		 
            $stmt = $this->datab->prepare($query); 
            $stmt->execute($params);
			$id = $this->datab->lastInsertId();
            return $id;
        }
        catch(PDOException $e)
        {
            throw new Exception($e->getMessage());
            return false;
        }           
    }
    public function updateRow($query, $params){
        return $this->insertRow($query, $params);
    }
    public function deleteRow($query, $params){
        return $this->insertRow($query, $params);
    }
	
	// generate random string by given length
	public static function generateRandomString() {
		$randomString = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,99 ) ,1 ) .substr( md5( time() ), 1);
		return $randomString;
	}
	
	// string format with space (First->String,Second->with space(true),No Space(false),casecensitive(Upper,Lower,First))
	public static function string_format($string,$space=false,$case='')
	{
		//check space or not
		if($space)
			$string = preg_replace('/\s+/',' ',$string);
		else
			$string = preg_replace('/\s+/','',$string);
		
		// check upper lower first
		if(strtolower($case)=="lower")
			$string = strtolower(trim($string));
		else if(strtolower($case)=="upper")
			$string = strtoupper(trim($string));
		else if(strtolower($case)=="first")
			$string = ucfirst(trim($string));
		else
			$string = trim($string);
		
		return $string;
	}
	public function upload_image($field_name, $uploadTo, $filename) 
	{
		if (isset($_FILES[$field_name]) && $_FILES[$field_name]['name'] != "") {
			$filenameOrg = $_FILES[$field_name]['name'];
			$extArray = explode('.', $filenameOrg);
			$ext = end($extArray);
			//$filename = date('YmdHis') . uniqid() . '.' . $ext;
			if($filename==""){
				$filename = time().'.'.$ext;
			}else{
				$filename = $filename.'_'.time().'.'.$ext;
			}
			$target_image = $uploadTo.$filename;
			chmod($uploadTo, 0777);
			$uploadimage = move_uploaded_file($_FILES[$field_name]['tmp_name'], $target_image);
			if ($uploadimage) {
				return $filename;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	// Generate Password Function Encrypt
	public function passwordEncrypt($string) 
	{
		// Convert md5
		$string = md5($string);
		
		return $string;
	}
	
}