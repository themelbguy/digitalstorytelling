//update password form
	function changePass(theForm)
  {
    // create variable to store error messages
  	var errMsg="";

  	// old has password been  entered
  	if (theForm.password.value == "")
    {
  		// generate an error msg and add it to the errMsg variable
  		 errMsg = errMsg + "Current password cannot be blank \n";
  	}

    // test length of password
    else if (theForm.password.value.length <8 || theForm.password.value.length >16)
    {
  	   //  generate an error msg and add it to the errMsg variable
  		 errMsg = errMsg + "Current password must be between 8 to 16 characters long\n";
  	}

    // Has New password been entered
    if (theForm.newPassword.value == "")
    {
     // generate an error msg and add it to the errMsg variable
     errMsg = errMsg + "New password cannot be blank \n";
    }

    // test length of password
    else if (theForm.newPassword.value.length <8 || theForm.newPassword.value.length >16)
    {
      //  generate an error msg and add it to the errMsg variable
    	errMsg = errMsg + "New password must be between 8 to 16 characters long\n";
    }

    // has confirm password been  entered
    if (theForm.confPassword.value == "")
    {
  		// generate an error msg and add it to the errMsg variable
  		errMsg = errMsg + "Confirm password cannot be blank \n";
  	}

  	 // test length of password
  	 else if (theForm.confPassword.value.length <8 || theForm.confPassword.value.length >16)
     {
  		 //  generate an error msg and add it to the errMsg variable
  		 errMsg = errMsg + "Confirm password must be between 8 to 16 characters long\n";
  	 }

  	 // does confirm password match?
  	 else if(theForm.newPassword.value != theForm.confPassword.value)
     {
  		 // generate an error msg and add it to the errMsg variable
  		 errMsg = errMsg + "New passwords does not match\n";
  	 }

	if(errMsg !="")
  {
		alert(errMsg);
		return false;
	}

	else
  {
		return true;
	}
}

// ====================================================================================================================================

// form validation

function checkData(theForm) {
	var errMsg = "";

	if(theForm.email.value == ""){
		errMsg = errMsg + "E-mail cannot be blank. \n";
	}

	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(theForm.email.value))) {
		errMsg = errMsg + "Enter a valid email address. \n";
	}

	if(theForm.lastName.value == ""){
		errMsg = errMsg + "Last name cannot be blank. \n";
	}

	if(theForm.password.value == ""){
		errMsg = errMsg + "Password cannot be blank. \n";
	}

	else if(theForm.password.value.length < 7 || theForm.password.value.length > 12){
		errMsg = errMsg + "Password must be between 7 and 12 characters. \n";
	}

	if(theForm.passwordConf.value == ""){
		errMsg = errMsg + "Password confirmation cannot be blank. \n";
	}

	else if(theForm.password.value != theForm.passwordConf.value){
		errMsg = errMsg + "Passwords do not match. \n";
	}

	if(errMsg !=""){
		alert(errMsg);
		return false;
	}

	else {
		return true;
	}
}
// end form validation

// ====================================================================================================================================

//THIS IS HAMBURGER MENU
$( document ).ready(function() {

$( ".cross" ).hide();
$( ".menu" ).hide();
$( ".hamburger" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".menu" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});

//THIS IS DROPDOWN
$(document).ready(function(){
    $("button").click(function(){
        $(".dropdownText").toggle();
    });
});
