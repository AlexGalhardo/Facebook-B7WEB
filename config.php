<?php
require 'environment.php';

// define("BASE", "http://localhost/facebook/");
define("BASE", "https://galhardo-social.herokuapp.com/")

public function test()
{           
    global $config;
}

// global $config;

$config = array();

if(ENVIRONMENT == 'production') {
	$config['dbname'] = 'heroku_33ab81938761b04';
	$config['host'] = 'us-cdbr-iron-east-02.cleardb.net';
	$config['dbuser'] = 'b305111783c034';
	$config['dbpass'] = '6e03016d';
} else {
	$config['dbname'] = 'facebook';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>



