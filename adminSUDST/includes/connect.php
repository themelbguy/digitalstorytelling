<?php
/*
Filename: connect.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 10 October 2017
Last Updated:
Description: mariaDB connection file of Department of Screen and Media Digital Storytelling Website
*/

// attempt to connect to MariaDB
try
{
	// set up variables to store login credentials
	$user = "ictweb516_1";
	$passWord = "6PuuCSps5P";
	$host = "feenix-mariadb.swin.edu.au";
	$dbName = "ictweb516_1_db";

	// create an object called $pdo from PDO Data Object class to establish connection
	$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $passWord);

	// default mode is silent failure for establishing connection
	// set our pdo object error mode to throw exceptions
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// execute the connection, changing the character set to utf-8
	$pdo->exec("SET NAMES 'utf8'");
}
// end of try block

// what to do if connection fails?
catch(PDOException $e)
{
	// create a suitable error message with exception details
	echo "Unable to connect to database: " .$e->getMessage();

	// stop script continuing
	exit();
}
// end of catch block

// testing purposes only (comment out when live)
// echo "Successfully connected to MariaDB";

?>
