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

?>

<html>
  <body>

    <?php include "includes/nav.php"; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navPadding">
          <h3 class="adminH3">Change Password</h3>
          <p>Authorised Access Only</p>
        </div>
      </div>

      <div class="row adminLoginForm">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form class="" action="" method="POST" onsubmit="return LoginForm(this);">
        		<label class="formArea">Current Password:<br>
        			<input type="password" name="loginPassWord" size="12">
        		</label><br>
				<label class="formArea">New Password:<br>
        			<input type="password" name="newPassWord" size="12">
        		</label>
				<label class="formArea">Confirm Password:<br>
        			<input type="password" name="confirmPassWord" size="12">
        		</label><br>

        		<label class="formSubmit">
              <input type="submit"  name ="" value="CONFIRM">
        		</label><br>
        	</form>
      		<!-- form finish here -->
        </div>
      </div>

      <?php include "includes/footer.php"; ?>
    </div>

  </body>
</html>
