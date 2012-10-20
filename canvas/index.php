<?php


require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).

$app_id = "APP_ID_GOES_HERE";
$app_secret = "APP_SECRET_GOES_HERE";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));


include("go_to_tab.php");

?>