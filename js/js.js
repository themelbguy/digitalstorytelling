
// feedBackForm  validation 
	
	function feedbackForm(theForm){
	// create variable to store error messages
	var errMsg="";
	


	    // has a first name been entered?
	 if (theForm.firstName.value ==""){
		 // generate an  error message and add it to the errMsg variable
		 //make sure put the value of First name which mentioned in html file . here it is lastName 
	     errMsg = errMsg + "First name cannot be blank please \n";
	 }
	 
	 
	 
	 
	 
	      // has a last name been entered?
	 if (theForm.lastName.value ==""){
		 // generate an  error message and add it to the errMsg variable
		 //make sure put the value of last name which mentioned in html file . here it is lastName 
	     errMsg = errMsg + "last name cannot be blank please \n";
	 }
	 
		// has a last name been entered?
	 if (theForm.phone.value ==""){
		 // generate an  error message and add it to the errMsg variable
		 //make sure put the value of last name which mentioned in html file . here it is lastName 
	     errMsg = errMsg + "Phone Number cannot be blank please \n";
	 }
	 
	 
	 
	 // has ans email been entered?
	 if (theForm.email.value == ""){
		 // generate an error msg and add it to the errMsg variable
		 errMsg = errMsg + "Email cannot be blank  please \n";
	 }
	 //test the syntax of an email address
	 else if((!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(theForm.email.value)))){
		 // generate an error msg and add it to the errMsg variable
		 errMsg = errMsg + "Invalid email address, please check again \n";
		 
	 }
	 
	 
	 
	 
	    // has a subject been entered?
	 if (theForm.subject.value ==""){
		 // generate an  error message and add it to the errMsg variable
		 //make sure put the value of Subject which mentioned in html file . here it is lastName 
	     errMsg = errMsg + "Subject cannot be blank please \n";
	 }
	 
	 
	    // has a Message been entered?
	 if (theForm.message.value ==""){
		 // generate an  error message and add it to the errMsg variable
		 //make sure put the value of Message which mentioned in html file . here it is lastName 
	     errMsg = errMsg + "Message cannot be blank please \n";
	 }
	 // test length of password
	 else if (theForm.message.value.length <7){
		 //  generate an error msg and add it to the errMsg variable
		 errMsg = errMsg + "Message is too short\n";
	 }
	 
	 
	
	
	if(errMsg !=""){
		alert(errMsg);
		return false;
	}
	else{
		
		return true;
	}
	
} // end of feedBackForm validation  function 
