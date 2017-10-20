<?php session_start();

/*
Filename: killSessionVariables.php
Author: Alessandro Gozali
Date Created: 18 October 2017
Last Updated:
Desrciption: Kills the current session's variables (use for development and testing purposes only).
*/

// unset and destroy all session variables
$_SESSION = array();
session_destroy();

// return to displaySessionVariables file
header("Location: displaySessionVariables.php");

// force the exit from this file if return fails
exit();

?>
