<?php


$firstname = htmlentities(stripslashes($_POST['userFirstName']), ENT_QUOTES, "UTF-8");
$lastname = htmlentities(stripslashes($_POST['userLastName']), ENT_QUOTES, "UTF-8");
$email = htmlentities(stripslashes($_POST['userEmail']), ENT_QUOTES, "UTF-8");
$telephone = htmlentities(stripslashes($_POST['userTelephone']), ENT_QUOTES, "UTF-8");
$city = htmlentities(stripslashes($_POST['userCity']), ENT_QUOTES, "UTF-8");
$address = htmlentities(stripslashes($_POST['userAddress']), ENT_QUOTES, "UTF-8");
$postal = htmlentities(stripslashes($_POST['userPostal']), ENT_QUOTES, "UTF-8");



   $to='support@rgenta.com';
	
	$subject = "Contact from ##XX## website.com ##XX##:".$firstname." ".$lastname;
	$message = '';
	$message .= '<table width="100%" border="0" cellspacing="5" cellpadding="5">
	  <tr>
	  	  <h2>__-- Contact from ##XX## WEBSITE ##XX## --__</h2>
		  <p><strong>First Name:</strong> '.$firstname.'</p>
		  <p><strong>Last Name:</strong> '.$lastname.'</p>
		  <p><strong>Email:</strong> '.$email.'</p>
		  <p><strong>Telephone:</strong> '.$telephone.'</p>
		  <p><strong>Address:</strong> '.$address.'</p>
		  <p><strong>City:</strong> '.$city.'</p>
		  <p><strong>Postal Code:</strong> '.$postal.'</p>
	</tr>
	</table>';
	$headers="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\n";
	$headers .= 'From: "##XX## WEBSITE.com" <example@WEBSITE.com> ##XX##'. "\r\n";
	
	$mail = @mail($to,$subject,$message,$headers);
	
	
	
?>