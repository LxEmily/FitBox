<?php
	function modifyInput($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function validatePassword ($data)
	{
		$allowAlphaNumericSpecialChar = '/(?<=\d).*((?<=[a-z]).*[A-Z]|(?<=[A-Z]).*[a-z])|(?<=[a-z]).*((?<=[A-Z]).*\d|(?<=\d).*[A-Z])|(?<=[A-Z]).*((?<=[a-z]).*\d|(?<=\d).*[a-z])/';
				
		if (empty($data))
			return 1;
		if (strlen($data) < 7)
			return 1;
		if (!preg_match($allowAlphaNumericSpecialChar, $data))
			return 1;
		
		else
			return 0;
	}
	
	function displayError($data)
	{
		echo $data."<br/>";
	}

	function displayMessage($name, $type)
	{
		if ($type == "login")
			echo "Welcome back, ".$name."!";
		
		if ($type =="register")
			echo "Welcome, ".$name."!"." Please check your inbox for verification email.";
		
		if ($type == "message")
			echo "Your message has been received, ".$name.".";
		
		if ($type == "purchase")
			echo "Your order has been received, ".$name.".";
	}
?>
