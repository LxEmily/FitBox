<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact</title>
		<?php include 'content/resources.php'; ?>
		<link rel="stylesheet" href="forms/forms.css">
	</head>
	
	<body>
		<?php include 'nav/nav.php'; ?>
			<section class="userform">
				<h1>Leave a message</h1>
				
				<form id="contact" name="contact" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
					<label for="name">Name: <br /></label>
					<input type="text" name="name" id="name" placeholder="Name">
				
					<label for="email">Email: <br /></label>
					<input type="text" name="email" id="email" placeholder="Email">
				
					<label for="messagetype">Type of message: <br /> </label>
					<select name="messagetype" id="messagetype">
						<option value="Enquires">Enquires</option>
						<option value="Suggestions">Suggestions</option>
					</select>
				
					<label for="message">Your message: <br /></label>
					<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
				
					<button type="submit" class="button">Submit</button>
					
					<input type="hidden" name="contact" value="contact">
				</form>
				
				<p><a href="faq.php" title="FAQ">View the FAQ</a> or <a href="about.php" title="About">the about section</a>.</p>
				
				<p><?php include 'forms/forms_message.php'; ?></p>
		</section>
		<?php include 'footer/footer.php'; ?>
		<script src="content/background.js" type="text/javascript"></script>
	</body>
</html>