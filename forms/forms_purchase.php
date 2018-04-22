<?php
	// Some functions
	include 'forms/forms_function.php';
	
	// Variables to hold values
	$purchasePlan = "";
	$purchaseShipName = "";
	$purchaseShipAdd = "";
	$purchaseShipCity = "";
	$purchaseShipZip = "";
	$purchaseShipMessage = "";
	$purchaseBillName = "";
	$purchaseBillEmail = "";
	$purchaseBillPhone = "";
	$purchaseBillAdd = "";
	$purchaseBillCity = "";
	$purchaseBillZip = "";
	$purcaseCardName = "";
	$purchaseCardNum = "";
	$purchaseCardExpMonth = "";
	$purchaseCardExpYear = "";
	$purchaseCardCVV = "";
	
	// Error messages
	$purchaseBillEmailError = "Please enter a valid email.";
	$purchaseBillPhoneError = "Please enter a valid phone number.";
	$purchaseCardCVVError = "Please enter a valid CVV.";
	$purchaseCardNumError = "Please enter a valid card number.";
	$emptyFieldError = "Please check if you have filled in all details.";
	
	// Form validation
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($_POST["purchase"] == "purchase")
		{
			// checks if any form field (except optional message) is empty
			if (empty($_POST["subs_len"]) || empty($_POST["shipName"]) || empty($_POST["shipAddress"]) || empty($_POST["shipCity"]) || empty($_POST["shipZip"]) || empty($_POST["billName"]) || empty($_POST["billEmail"]) || empty($_POST["billPhone"]) || empty($_POST["billAddress"]) || empty($_POST["billCity"]) || empty($_POST["billZip"]) || empty($_POST["cardName"]) || empty($_POST["cardNum"]) || empty($_POST["cardExpMonth"]) || empty($_POST["cardExpYear"]) || empty($_POST["cardCVV"]))
				displayError($emptyFieldError);
			
			// only parse data if they are not empty
			if (!(empty($_POST["subs_len"]) || empty($_POST["shipName"]) || empty($_POST["shipAddress"]) || empty($_POST["shipCity"]) || empty($_POST["shipZip"]) || empty($_POST["billName"]) || empty($_POST["billEmail"]) || empty($_POST["billPhone"]) || empty($_POST["billAddress"]) || empty($_POST["billCity"]) || empty($_POST["billZip"]) || empty($_POST["cardName"]) || empty($_POST["cardNum"]) || empty($_POST["cardExpMonth"]) || empty($_POST["cardExpYear"]) || empty($_POST["cardCVV"])))
			{
				$purchasePlan = modifyInput($_POST["subs_len"]);
				$purchaseShipName = modifyInput($_POST["shipName"]);
				$purchaseShipAdd = modifyInput($_POST["shipAddress"]);
				$purchaseShipCity = modifyInput($_POST["shipCity"]);
				$purchaseShipZip = modifyInput($_POST["shipZip"]);
				
				// If message is empty, assign N/A, else parse as normal
				if (!empty($_POST["message"]))
					$purchaseShipMessage = modifyInput($_POST["message"]);
				if (empty($_POST["message"]))
					$purchaseShipMessage = "N/A";
				
				$purchaseBillName = modifyInput($_POST["billName"]);
				$purchaseBillEmail = modifyInput($_POST["billEmail"]);				
				$purchaseBillPhone = modifyInput($_POST["billPhone"]);				
				$purchaseBillAdd = modifyInput($_POST["billAddress"]);
				$purchaseBillCity = modifyInput($_POST["billCity"]);
				$purchaseBillZip = modifyInput($_POST["billZip"]);
				$purcaseCardName = modifyInput($_POST["cardName"]);
				$purchaseCardNum = modifyInput($_POST["cardNum"]);
				$purchaseCardExpMonth = modifyInput($_POST["cardExpMonth"]);
				$purchaseCardExpYear = modifyInput($_POST["cardExpYear"]);
				$purchaseCardCVV = modifyInput($_POST["cardCVV"]);
				
				// validates email and CVV (numbers only)
				if (!filter_var($purchaseBillEmail, FILTER_VALIDATE_EMAIL)) 
					displayError($purchaseBillEmailError);
				if (!preg_match('/^[0-9]*$/', $purchaseBillPhone))
					displayError($purchaseBillPhoneError);
				if (!preg_match('/^[0-9]*$/', $purchaseCardCVV))
					displayError($purchaseCardCVVError);
				if (!preg_match('/^[0-9]*$/', $purchaseCardNum))
					displayError($purchaseCardNumError);
				if (filter_var($purchaseBillEmail, FILTER_VALIDATE_EMAIL) && preg_match('/^[0-9]*$/', $purchaseBillPhone) && preg_match('/^[0-9]*$/', $purchaseCardCVV) && preg_match('/^[0-9]*$/', $purchaseCardNum))
					displayMessage($purchaseBillName, $_POST["purchase"]);
			}
		}
	}		
?>
