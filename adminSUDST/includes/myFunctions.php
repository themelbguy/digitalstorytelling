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
