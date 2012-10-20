<?php

$firstname = htmlentities(stripslashes($_POST['userFirstName']), ENT_QUOTES, "UTF-8");
$lastname = htmlentities(stripslashes($_POST['userLastName']), ENT_QUOTES, "UTF-8");
$email = htmlentities(stripslashes($_POST['userEmail']), ENT_QUOTES, "UTF-8");
$telephone = htmlentities(stripslashes($_POST['userTelephone']), ENT_QUOTES, "UTF-8");
$city = htmlentities(stripslashes($_POST['userCity']), ENT_QUOTES, "UTF-8");
$address = htmlentities(stripslashes($_POST['userAddress']), ENT_QUOTES, "UTF-8");
$postal = htmlentities(stripslashes($_POST['userPostal']), ENT_QUOTES, "UTF-8");
$awareness = htmlentities(stripslashes($_POST['userAwareness']), ENT_QUOTES, "UTF-8");
$inquiry = htmlentities(stripslashes($_POST['userInquiry']), ENT_QUOTES, "UTF-8");
$homeowner = htmlentities(stripslashes($_POST['userHomeOwner']), ENT_QUOTES, "UTF-8");



$dbSuccess;
$jsonReturnVar;
$jsonReturnVar->isJSON = 'true';


$host="localhost";
$database="DB_wp";
$username="USER_wp";
$password="PASSWORD1234";
$table="contact";
   mysql_connect($host, $username, $password) or die(mysql_error());
 
   mysql_select_db($database) or die(mysql_error());
  
   $query = "INSERT INTO ".$table." (id, firstname, lastname, email, telephone, city, address, postal, awareness, inquiry, homeowner)
   VALUES ('','".$firstname."','".$lastname."','".$email."','".$telephone."','".$address."','".$city."','".$postal."','".$awareness."','".$inquiry."','".$homeowner."')";


   if(mysql_query($query)) {
	$jsonReturnVar->dbSuccess = 'true';
	echo json_encode($jsonReturnVar);
   } else {
	$jsonReturnVar->dbSuccess = 'false';
	echo json_encode($jsonReturnVar);
   };
   
   mysql_close();
   
	
?>