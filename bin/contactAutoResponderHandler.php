<?php



$firstname = stripslashes($_POST['userFirstName']);
$email = stripslashes($_POST['userEmail']);


/*
$firstname = 'Styrker';
$email = 'support@rgenta.com';
*/
$from = 'From: "FIRST NAME" <EXAMPLE@WEBSITE.com>';

   $to=$email;
	
	$subject = "Thank you, ".$firstname.", for contacting WEBSITE.COM";
	$message = '';
	$message .= '<table width="600px" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	  	  <img src="##XX##/images/autoresponder/header.png" width="600" height="226" />
		  <p style="padding:0 55px; color:#680003; font-size:22px; font-family:Times, serif;"><strong>Thank you for registering for ##XX## WEBSITE.COM ##XX##!</strong></p>
		  <p style="padding:0 55px; color:#514C44; font-size:22px; font-family:Times, serif;">One of our representatives will be in touch with you shortly.</p>
		  <img src="##XX##/images/autoresponder/footer.png" width="600" height="250" />
		</tr>
	</table>';
	$headers="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso-8859-1\n";
	$headers .= $from. "\r\n";
	
	$mail = @mail($to,$subject,$message,$headers);
	
	
	
?>