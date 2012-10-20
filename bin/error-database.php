<?php

$error_message = 'Error sending data to ##XX## WEBSITE.com ##XX## contactSubmitHandler.php';

$today = date("y.m.d H:i:s");

	$to='support@rgenta.com';
	
	$subject = "##XX## website.com ##XX## - Contact problem";
	$message = '';
	$message .= '<table width="100%" border="0" cellspacing="5" cellpadding="5">
	  <tr>
	  <p>custom error: '.$error_message.'</p>
	  <p>__________</p>
	  <p>date-time: '.$today.'</p>
	  </tr>
	</table>';
	$headers="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\n";
	$headers .= 'From: "##XX## WEBSITE ##XX##" <support@rgenta.com>'. "\r\n";
	
	
	$mail = @mail($to,$subject,$message,$headers);

?>