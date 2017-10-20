<?php session_start();

/*
Filename: logout.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 10 October 2017
Last Updated:
Desrciption: Logout customer and kill session variables
*/

// unset and destroy all session variables
$_SESSION = array(); // or session_unset();
session_destroy();

// return to index file
header("Location: adminLogin.php");

// force the exit from this file if return fails
exit();

?>
