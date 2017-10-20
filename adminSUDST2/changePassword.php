<?php session_start();

/*
Filename: adminLogin.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 11 October 2017
Last Updated:
Desrciption: Change password page of Department of Screen and Media Digital Storytelling Website
*/

// import head section
include "includes/head.php";

?>

<?php
  if(isset($_SESSION['login']) && ($_SESSION['login'] == 'valid'))
  {
?>
<html>
  <body>

    <?php include "includes/nav.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navPadding">
          <h3 class="adminH3">Change Password</h3>
        </div>
      </div>

      <div class="row adminLoginForm">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form class="" action="" method="POST" onsubmit="return changePass(this);">
        		<label class="formArea">Current Password:<br>
        			<input type="password" name="password" size="16">
        		</label><br>
				<label class="formArea">New Password:<br>
        			<input type="password" name="newPassword" size="16">
        		</label>
				<label class="formArea">Confirm Password:<br>
        			<input type="password" name="confPassword" size="16">
        		</label><br>

        		<label class="formSubmit">
              <input type="submit"  name ="formPassword" value="CONFIRM">
        		</label><br>
        	</form>
      		<!-- form finish here -->
        </div>
      </div>
    </div>

  </body>
</html>
<?php
  }

  else
  {
    exit();
  }
?>

<?php
// test Submit button has been clicked
if(isset($_POST['formPassword']))
{
	// database connection
	include "includes/connect.php";

	// write a sql statement to get data from tbl_state table
	try
	{
		// create sql statement
		$sql = "SELECT COUNT(*) FROM tbl_adminUser WHERE email = :email AND password = :password;";

		// prepare statement
		$statement = $pdo->prepare($sql);

		$password = cleanInput($_POST['password']);

		// bind the values to the statement's placeholders
		$statement->bindValue(':email', $_SESSION['email']);
		$statement->bindValue(':password', sha1($password));

		// execute sql statement
		$statement->execute();
	}
	// end of try block

	catch(PDOException $e)
	{
		// create a suitable error message with exception details
		echo "Error checking for current password: " .$e->getMessage();

		// stop script continuing
		exit();
	}
	// end of catch block

	// get value of count in SQL statement result set
	$nbrOfRows = $statement->fetchColumn();

	// test number of rows to see if we have a matching email
	if($nbrOfRows == 0)
	{
		// display duplicate email message
		echo "<script type='text/javascript'>alert('Invalid current password.');</script>";

		// stop script continuing
		exit();
	}
	// end of number of rows test

	// current password matches, so capture data from form and write to database
	// capture input from form and store in local variables

	try
	{
		// create sql insert statement
		$sql = "UPDATE tbl_adminUser SET password = :password WHERE email = :email;";

		// prepare statement
		$statement = $pdo->prepare($sql);

		// bind the values to the statement's placeholders
		$statement->bindValue(':email', $_SESSION['email']);
		$statement->bindValue(':password', cleanInput($_POST['newPassword']));

		// execute sql statement
		$statement->execute();
	}
	// end of try block

	catch(PDOException $e)
	{
		// create a suitable error message with exception details
		echo "Error changing password: " .$e->getMessage();

		// stop script continuing
		exit();
	}
	// end of catch block

	// update applicable session variables
	$_SESSION['password'] = $password;

	// display successful message
	echo "<script type='text/javascript'>alert('Password changed!');</script>";

	// reload page
	exit();
}
// end of submit button check
?>
