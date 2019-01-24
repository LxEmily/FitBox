<?php
	// Some functions
	include 'forms/forms_function.php';
	
	// Variables to hold values
	$registerFirstName = "";
	$registerLastName = "";
	$registerEmail = "";
	$registerPassword = "";
	
	// Error messages
	$registerFirstNameError = "Please enter a valid first name.";
	$registerLastNameError = "Please enter a valid last name.";
	$registerEmailError = "Please enter a valid email.";
	$registerPasswordError = "Please enter a valid password. It cannot be empty, must contain at least 8 characters, with at least 1 uppercase, 1 lowercase, and 1 number.";
	
	// Form validation
	// checks method
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// checks for the correct form
		if ($_POST["register"] == "register")
		{
			// checks if any form field is empty
			if (empty($_POST["firstname"]))
				displayError($registerFirstNameError);
			if (empty($_POST["lastname"]))
				displayError($registerLastNameError);
			if (empty($_POST["email"]))
				displayError($registerEmailError);
			if (empty($_POST["password"]))
				displayError($registerPasswordError);
			
			// only parse data if they are not empty
			if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
			{
				// trims input data
				$registerFirstName = modifyInput($_POST["firstname"]);
				$registerLastName = modifyInput($_POST["lastname"]);
				$registerEmail = modifyInput($_POST["email"]);
				$registerPassword = modifyInput($_POST["password"]);
				
				// validates data
				if (!preg_match("/^[a-zA-Z ]*$/", $registerFirstName))
					displayError($registerFirstNameError);				
				if (!preg_match("/^[a-zA-Z ]*$/", $registerLastName))
					displayError($registerLastNameError);
				if (!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) 
					displayError($registerEmailError);
				if (validatePassword($registerPassword) != 0)
					displayError($registerPasswordError);
				
				// once validated, welcome user 
				else
					displayMessage($registerFirstName, $_POST["register"]);
			}
		}		
	}
?>