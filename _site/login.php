<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Log In</title>
		<?php include 'content/resources.php'; ?>		
		<link rel="stylesheet" href="forms/forms.css">	
	</head>
	
	<body>
		<?php include 'nav/nav.php'; ?>
		<section class="userform">
			<h1>Welcome back!</h1>
			
			<form id="login" name="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				
				<label for="email">Email: <br /></label>
				<input type="text" name="email" id="email" placeholder="Email">
				
				<label for="password">Password: <br /></label>
				<input type="password" name="password" id="password" placeholder="Password">
				
				<button type="submit" class="button" title="Log in">Log in</button>
				
				<input type="hidden" name="login" value="login">
			</form>
			
			<p><a href="register.php" title="Sign up">New to FitBox? Sign up here.</a></p>
			
			<p><?php include 'forms/forms_login.php'; ?></p>		
		</section>		
		<?php include 'footer/footer.php'; ?>
		<script src="content/background.js" type="text/javascript"></script>
	</body>
</html>