<?php session_start();

/*
Filename: displaySessionVariables.php
Author: Alessandro Gozali
Date Created: 18 October 2017
Last Updated:
Desrciption: Display the current session's variables (use for fevelopment and testing purposes only).
*/

// set page title
$pageTitle = "Session Variables";

// import head section
include "includes/head.php";

?>

<html>
  <body>

    <?php include "includes/nav.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navPadding">

					<?php
					echo "<h3>Current session variables are:</h3>";

					// display all session variables
					while ($var = each($_SESSION))
					{
						printf("%s: %s<br>", $var['key'], $var['value']);
					}
					?>
				</div>
			</div>
		</div>

  </body>
</html>
