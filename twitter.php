<?php
	session_start();

	require_once("src/TwitterOAuth.php");      
        
	$apikey="hiXQ1Vuk5xNAEhkVjReBloCK5";
	$apisecret="secret";
	$accesstoken="7591982-uBDSQAkr65hgQ7KQ1OZ82pTcjpEh8g8HhGmvx6tQFc";
	$accesssecret="secret";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);	
	
print_r($connection);

?>
