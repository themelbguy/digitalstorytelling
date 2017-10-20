<?php session_start();

/*
Filename: adminLogin.php
Author: Abdul Wasay, Alessandro Gozali, Florence Chau, Kongsakul Jaijaroen
Date Created: 06 September 2017
Last Updated:
Desrciption: Admin login page of Department of Screen and Media Digital Storytelling Website
*/

// import head section
include "includes/head.php";

// test if login details have been keyed in
if(isset($_POST['loginSubmit']))
{
	// capture data from form
	$loginEmail = cleanInput($_POST['loginEmail']);
	$loginPassword = cleanInput($_POST['loginPassword']);

	// check if credentials are correct
	checkCustomerLogin($loginEmail, $loginPassword);
}

?>

<html>
  <body>

    <?php include "includes/navLogin.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navPadding">
          <h3>Administrator Login</h3>
          <p>Authorised Access Only</p>
        </div>
      </div>

      <div class="row adminLoginForm">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php
  					// if valid login, go to admin page
  					if(isset($_SESSION['login']) && $_SESSION['login'] == "valid")
  					{
  						// go to admin landing page
  						echo "<script type='text/javascript'>location.replace('adminLanding.php');</script>";
  					}

  					else
  					{
  						// invalid login
  						if(isset($_SESSION['login']) && $_SESSION['login'] == "invalid")
  						{
  							// display error message
  							echo "<div><p id='smallP'>Invalid email and password</p></div>";
  					?>

  							<!-- LOGIN FORM -->
                <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return LoginForm(this);">
              		<label class="formArea">Email:<br>
              			<input type="text" maxlength="" size="" name="loginEmail">
              		</label>

              		<label class="formArea">Password:<br>
              			<input type="password" name="loginPassword" size="12">
              		</label><br>

              		<label class="formSubmit">
                    <input type="submit"  name ="loginSubmit" value="LOGIN">
              		</label><br>
              	</form>
  					<?php
  						}
  						else
  						{
  						?>
  							<!-- LOGIN FORM -->
                <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return LoginForm(this);">
              		<label class="formArea">Email:<br>
              			<input type="text" maxlength="" size="" name="loginEmail">
              		</label>

              		<label class="formArea">Password:<br>
              			<input type="password" name="loginPassword" size="12">
              		</label><br>

              		<label class="formSubmit">
                    <input type="submit"  name ="loginSubmit" value="LOGIN">
              		</label><br>
              	</form>
  						<?php
  						}
  					}
  					?>

        </div>
      </div>
    </div>
  </body>
</html>
