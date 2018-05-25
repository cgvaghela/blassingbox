<?php 
// string format with space (First->String,Second->with space(true),No Space(false),casecensitive(Upper,Lower,First))
function string_format($string,$space=false,$case='')
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

// Generate Password Function Encrypt/Decrypt
function passwordConvertMD5($string) 
{
	// Convert md5
	$string = md5($string);
	
	return $string;
}

// generate random string by given length
function generateRandomString() {
	$randomString = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,99 ) ,1 ) .substr( md5( time() ), 1);
	return $randomString;
}
?>