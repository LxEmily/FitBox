<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
		<?php include 'content/resources.php'; ?>
		<link rel="stylesheet" href="forms/forms.css">
	</head>
	
	<body>
		<?php include 'nav/nav.php'; ?>
		<section class="userform">
			<h1>Welcome!</h1>
			
			<form id="register" name="register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
				<label for="firstname">First Name: <br /></label>
				<input type="text" name="firstname" id="firstname" placeholder="First Name">
			
				<label for="lastname">Last Name: <br /></label>
				<input type="text" name="lastname" id="lastname" placeholder="Last Name">
			
				<label for="email">Email: <br /></label>
				<input type="text" name="email" id="email" placeholder="Email">
			
				<label for="password">Password: <br /></label>
				<input type="text" name="password" id="password" placeholder="Password">
				
				<button type="submit" class="button" title="Register">Register</button>
			
				<input type="hidden" name="register" value="register">
			</form>
			
			<p><a href="login.php" title="Sign in">Already a member? Sign in here.</a></p>
			
			<p><?php include 'forms/forms_register.php'; ?></p>
		</section>
		<?php include 'footer/footer.php'; ?>
		<script src="content/background.js" type="text/javascript"></script>
	</body>
</html>