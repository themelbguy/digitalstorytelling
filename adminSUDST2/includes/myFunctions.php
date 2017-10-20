<?php
/*
Filename: myFunctions.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 06 September 2017
Last Updated:
Description: Functions for Department of Screen and Media Digital Storytelling Website
*/

// cleanInput Function for Forms
function cleanInput($data)
{
	$data = trim($data); // removes extra spaces, tabs, new lines
	$data = stripslashes($data); // remove back slashes
	$data = htmlspecialchars($data); // convert special characters to entity codes

	return $data;
}
// end of cleaninput function

// ==================================================================================================================

// check customer login
function checkCustomerLogin($em, $pw)
{
	include "includes/connect.php";

	// test if email and password are on file
	try
	{
		// create our SQL statement
		$sql = "SELECT * FROM tbl_adminUser WHERE email = :email AND password = :password;";

		// prepare statement
		$statement = $pdo->prepare($sql);

		// bind the values to the statement's placeholders
		$statement->bindValue(':email', $em);
		$statement->bindValue(':password', $pw);

		// execute sql statement
		$statement->execute();
	}

	catch(PDOException $e)
	{
		// create a suitable error message with exception details
		echo "Error checking for matching email and password: " .$e->getMessage();

		// stop script continuing
		exit();
	}

	// get number of records in $statement result set
	$nbrOfRecords = $statement->rowCount();

	// test if matching record and if so log customer in
	if($nbrOfRecords == 1)
	{
		// valid details have been submitted so set up session variables
		$_SESSION['login'] = "valid";

		// fetch customer data from statement
		$row = $statement->fetch();

		// save customer data to session variables
		$_SESSION['email'] = $row['email'];
		$_SESSION['firstName'] = $row['firstName'];
		$_SESSION['lastName'] = $row['lastName'];
	}

	else
	{
		// no match so invalid attempt to log in
		$_SESSION['login'] = "invalid";
	} // end of if statement
}
// end of check customer login

// ==================================================================================================================
