<?php session_start();
error_reporting(E_ALL);
include_once("admin/config/config.php");
$db = new db();
$requests = $db->getRows("SELECT * FROM `requests` WHERE `active`=?",array('1'));
if(!empty($requests))
{
	
		$prayed = $db->numRow("SELECT * FROM `prayedfor` WHERE `request_id`=?",array($value['id']));
		//$to = "vijay.syntego@gmail.com";
		$to = $value['email'];
		$subject = "At the end of the day your Prayer Request Report";

		$message = "<html><head><meta name='viewport' content='width=device-width, initial-scale=1.0'><style type='text/css'> body { margin: 0; } @font-face { font-family: lightfont;src: url(http://printbroking.com/orders/order-Mang/controller/font/SANSATION_LIGHT.TTF); } @font-face { font-family: boldfont;src:url(http://printbroking.com/orders/order-Mang/controller/font/SANSATION_BOLD.TTF); } body, table, td, p, a, li, blockquote { -webkit-text-size-adjust: none!important;font-family: lightfont;font-style: normal;font-weight: 400; }

			button{ width:90%; } 

			@media screen and (max-width:600px) { body, table, td, p, a, li, blockquote { -webkit-text-size-adjust: none!important;font-family: lightfont; }

			table {	width: 100%; } .footer { height: auto !important; max-width: 48% !important; width: 48% !important; } table.responsiveImage { height: auto !important;max-width: 30% !important;width: 30% !important; } table.responsiveContent { height: auto !important;max-width: 66% !important;width: 66% !important; } .top { height: auto !important;max-width: 48% !important;width: 48% !important; } .catalog { margin-left: 0%!important; } }

			@media screen and (max-width:480px) { body, table, td, p, a, li, blockquote { -webkit-text-size-adjust: none!important; font-family:lightfont; } table { width: 100% !important;border-style: none !important; } .footer { height: auto !important;max-width: 96% !important;width: 96% !important; }.table.responsiveImage {	height: auto !important;max-width: 96% !important;width: 96% !important; } .table.responsiveContent { height: auto !important;max-width: 96% !important;width: 96% !important; } .top { height: auto !important;max-width: 100% !important;width: 100% !important; } .catalog { margin-left: 0%!important; } button{ width:90%!important; } } 

			@media (min-width: 360px) and (max-width: 640px){ body, table, td, p, a, li, blockquote { -webkit-text-size-adjust: none!important;font-family: Merienda, 'Times New Roman', serif; } table { width: 100% !important; border-style: none !important; } .footer { height: auto !important; max-width: 50% !important;width: 50% !important; } .table.responsiveImage { height: auto !important; max-width: 50% !important; width: 50% !important; } .table.responsiveContent { height: auto !important;max-width: 50% !important;width: 50% !important; } .top { height: auto !important;max-width: 50% !important;width: 50% !important; } .catalog { margin-left: 0%!important; } button{ width:90%!important; } }

			</style>

			</head>

			<body yahoo='yahoo'>

				<table width='100%' border='0'  cellspacing='0' cellpadding='0'>

			<tbody>

			<tr>

			  <td><table width='600' border='1'  align='center' cellpadding='0' cellspacing='0'>

				  <tbody>

					<tr> 

					  <td><table width='100%'  align='left' cellpadding='0' cellspacing='0'>

							<tr> 

								<td align='center' style='font-size: 32px; font-weight: 300; line-height: 2.5em; color: #929292; font-family: Merienda, Times New Roman, serif, sans-serif;'>

									<img src='http://localhost/vivek/logo.png' style='margin-top:2%;' />

								</td>

							 </tr>

							 <tr> 

								<td align='center' style='font-size: 30px; font-weight:900; color: #FFF; font-family: Merienda, Times New Roman, serif, sans-serif;background:#EF0303;height:35px;'><strong>Registration</strong></td>

							  </tr>

							  <tr>

								<td style='font-size: 0; line-height: 0;' height='20'><table width='100%' align='left'  cellpadding='0' cellspacing='0' border='0'>

									<tr> 

									  <td style='font-size: 24px;font-weight:900;text-align:center;color:#EF0303;font-family:Arial, Geneva, sans-serif;' height='25'>Hi, </td>

									</tr>

									<tr> 

									  <td style='font-size: 20px;text-align:center;font-family:Arial, Geneva, sans-serif;' height='25'> Mail about new Password </td>

									</tr>

								  </table></td>

							  </tr>

							  <tr> 

							  <td style='font-size: 0; line-height: 0;border:none;' height='5'><table width='100%' align='left'  cellpadding='0' cellspacing='0'>

								  <tr>

									<td style='font-size: 0; line-height: 0;background:#EF0303;' height='5'>&nbsp;</td>

								  </tr>

								</table></td>

							</tr>

							<tr>

							  <td><table cellpadding='0' cellspacing='0' align='center' width='84%' style='margin-left:12.5%' class='catalog'>

								  <tr>

									<td><table class ='responsive-table' width='100%'  cellspacing='0' cellpadding='5' align='left' style='margin: 10px 0px 10px 0px;'>

										<tbody>

						<tr>

											<th style='font-family:boldfont;font-size: 18px; font-weight:900;text-align:left;'>Click below link and change your password</th>

											<td style='font-size:20px;'><a href=\"http://printbroking.com/client-order/\" style=\"text-decoration:none;\">
											".$sel['id']."	

											</a></td>

											</tr>

										</tbody>

										</table>

									</td>

								   </tr>

								   <tr>

							<td>

							</td>

						  </tr>

						</table></td>

					</tr>

					<tr> 

					  <td style='font-size: 0; line-height: 0;' height='5'><table width='100%' align='left'  cellpadding='0' cellspacing='0'><tr><td style='font-size: 0; line-height: 0;background:#EF0303' height='5'>&nbsp;</td></tr></table></td>

					</tr>

					<tr bgcolor='#FFFFFF'><td>

					  <table border='0' class='footer' width='96%' cellpadding='0' cellspacing='0' style='margin-top:1.5%;text-align:left;margin-left:2.5%;'><tr><th style='font-size: 24px; font-weight:900; color: #EF0303; font-family: boldfont;width:28%'>Address</th><td  style='font-size:20px;color:#000;font-family: lightfont;'>79 kangaroo valley Road ,Berry New South Wales 2535, Australia.</td></tr><tr><th style='font-size: 24px; font-weight:900; color: #EF0303; font-family:boldfont;width:25%;'>E-Mail</th><td style='font-size: 20px; color:#000; text-align:left; font-family: lightfont;'><a href='mailto:info@ziwood.com'>info@ziwood.com</a></td></tr></table>

					  </td></tr></tbody></table></td></tr></tbody></table></body></html>";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1"."\r\n";

		// More headers
		$headers .= 'From: <DONOTREPLY@syntegowebsolution.com>'."\r\n";
		
		if(mail($to,$subject,$message,$headers)){
			//echo "mail send.";
		}else{
			//echo "mail not send.";
		}
	
}
?>