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
          <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return LoginForm(this);">
        		<label class="formArea">Email:<br>
        			<input type="text" maxlength="" size="" name="LoginUserName">
        		</label>

        		<label class="formArea">Password:<br>
        			<input type="password" name="loginPassWord" size="12">
        		</label><br>

        		<label class="formSubmit">
              <input type="submit"  name ="" value="LOGIN">
        		</label><br>
        	</form>
      		<!-- form finish here -->
        </div>
      </div>

    </div>

  </body>
</html>
