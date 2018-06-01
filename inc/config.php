<?php
	// If there is no constant called __CONFIG__ defined, do not load this file
	if(!defined('__CONFIG__')) {
		exit("You do not have a config file");
	}

	// Our config is below
	
	// Include the DB.php file
	include_once "classes/DB.php";

	$con = DB::getConnection();
?>