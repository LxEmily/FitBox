<?php
	// Some functions
	include 'forms/forms_function.php';
	
	// Variables to hold values
	$loginEmail = "";
	$loginPassword = "";
	
	// Error messages
	$loginEmailError = "Please enter a valid email.";
	$loginPasswordError = "Please enter a valid password. It cannot be empty, must contain at least 8 characters, with at least 1 uppercase, 1 lowercase, and 1 number.";
	
	// Form validation
	// checks method
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		// checks for the correct form
		if ($_POST["login"] == "login") 
		{
			// checks if email is empty
			if (empty($_POST["email"])) 
				displayError($loginEmailError);
			// checks if password is empty
			if (empty($_POST["password"])) 
				displayError($loginPasswordError);
			
			// only parse data if they are not empty
			if (!empty($_POST["email"]) && !empty($_POST["password"])) 
			{
				// trims input data
				$loginEmail = modifyInput($_POST["email"]);
				$loginPassword = modifyInput($_POST["password"]);
				// validates data
				if (!filter_var($loginEmail, FILTER_VALIDATE_EMAIL)) 
					displayError($loginEmailError);
				if (validatePassword($loginPassword) != 0)
					displayError($loginPasswordError);
				
				// once validated, welcome user 
				else
					displayMessage($loginEmail, $_POST["login"]);
			}
		}
	}		
?>
