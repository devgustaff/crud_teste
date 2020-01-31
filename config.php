<?php

define("URL", "http://localhost/crud_teste/");

// ambiente
define("ENVIRONMENT", "development");

global $config;
$config = array();

if ( ENVIRONMENT == "development" ) {
	$config["dbname"] = "crud_signo";
	$config["dbhost"] = "localhost";
	$config["dbuser"] = "root";
	$config["dbpass"] = "";
}