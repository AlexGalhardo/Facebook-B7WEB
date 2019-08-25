<?php
require 'environment.php';

// define("BASE", "http://localhost/facebook/");
define("BASE", "http://social-alexgalhardo-com.umbler.net/")

$config = array();

if(ENVIRONMENT == 'production') {
	$config['dbname'] = 'galhardosocial';
	$config['host'] = 'mysql873.umbler.com';
	$config['dbuser'] = 'alexgalhardo';
	$config['dbpass'] = 'galhardo159';
} else {
	$config['dbname'] = 'facebook';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>



