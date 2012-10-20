<?php


require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).

$app_id = "APP_ID_GOES_HERE";
$app_secret = "APP_SECRET_GOES_HERE";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));

$signed_request = $facebook->getSignedRequest();

function parsePageSignedRequest() {
    if (isset($_REQUEST['signed_request'])) {
      $encoded_sig = null;
      $payload = null;
      list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
      $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
      $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
      return $data;
    }
    return false;
}
  
  
if($signed_request = parsePageSignedRequest()) {
    if($signed_request->page->liked) {
	// If a fan is on your page
	include("post_like.php");
    } else {
	// If a non-fan is on your page
	include("pre_like.php");
    }
} else {
	//echo 'no signed request';
	include("post_like.php");	
}
//print_r($_REQUEST);
?>