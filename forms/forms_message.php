<?php
	// Some functions
	include 'forms/forms_function.php';
	
	// Variables to hold values
	$contactName = "";
	$contactEmail = "";
	$contactType = "";
	$contactMessage = "";
	
	// Error messages
	$contactNameError = "Please enter a valid name.";
	$contactEmailError = "Please enter a valid email.";
	$contactTypeError = "Please choose a message type.";
	$contactMessageError = "Please enter your message.";
	
	// Form validation
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($_POST["contact"] == "contact")
		{
			// checks if any form field is empty
			if (empty($_POST["name"]))
				displayError($contactNameError);
			if (empty($_POST["email"]))
				displayError($contactEmailError);
			if (empty($_POST["messagetype"]))
				displayError($contactTypeError);
			if (empty($_POST["message"]))
				displayError($contactMessageError);
			
			// only parse data if they are not empty
			if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["messagetype"]) && !empty($_POST["message"]))
			{
				// trims input data
				$contactName = modifyInput($_POST["name"]);
				$contactEmail = modifyInput($_POST["email"]);
				$contactType = modifyInput($_POST["messagetype"]);
				$contactMessage = modifyInput($_POST["message"]);
				
				// validates data
				if (!preg_match("/^[a-zA-Z ]*$/", $contactName))
					displayError($contactNameError);
				if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) 
					displayError($contactEmailError);
				
				// once validated, welcome user 
				else
					displayMessage($contactName, $_POST["contact"]);
			}
		}
	}
?>
