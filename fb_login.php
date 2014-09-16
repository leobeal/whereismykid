<?php

require 'fb/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '452712914831377',
  'secret' => '0fc29e3a753aec986f8b14037a496128',
));

// Get User ID
$user = $facebook->getUser();


if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}


if ($user) {
	
	$_SESSION["logged_in"] 	= 1;
	header("location:./");
	
	
} else {
  $statusUrl = $facebook->getLoginUrl();
  $loginUrl = $facebook->getLoginUrl();
}

	if ($user):
	// do nothing
	else:
		header("Location:".$loginUrl);
	endif;

?>