<!DOCTYPE html>
<html lang="en">
	<head>
		<title>FAQ</title>
		<?php include 'resources.php'; ?>
		<link rel="stylesheet" href="accordion.css">	
		<link rel="stylesheet" href="header.css">	
	</head>
	
	<body>
		<?php include 'nav.php'; ?>
		
		<header class="header header_short">
			<h1>Frequently Asked Questions</h1>
			<p>The questions asked so you don't have to.</p>
		</header>
		
		<div class="accordionAll container">
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="What is FitBox">What is FitBox?</h2>
				</button>
				<div class="accordionPanel">
					<p>FitBox is a subscription box catering to young adults who are interested in fitness and nutrition. The main point is to surprise and introduce you to various full-sized products never seen before at this price point.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="Cost of FitBox">How much does a box cost?</h2>
				</button>
				<div class="accordionPanel">
					<p>Each box costs &euro;40 and is delivered bi-monthly.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="How do I pay?">How do I pay?</h2>
				</button>
				<div class="accordionPanel">
					<p>You may pay by VISA, PayPal, MasterCard. Each box is only billed at the start of the delivery month, i.e. An April box is billed on April 1st.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="Cancelation policy">Can I cancel any time?</h2>
				</button>
				<div class="accordionPanel">
					<p>You may cancel subscription at any time up until the first day of delivery month, i.e. An April box cannot be cancelled on April 1st and after.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="Gifting FitBox">Can I purchase a box as a gift?</h2>
				</button>
				<div class="accordionPanel">
					<p>Yes, simply enter the receiver's delivery details at checkout. For customization, please state your details on the optional customization text box.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="FitBox Team">Who is behind FitBox?</h2>
				</button>
				<div class="accordionPanel">
					<p>We're happy you asked! Please view our <a href="about.php" title="About">About</a> page for our bio!</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="More questions?">What if I have more questions?</h2>
				</button>
				<div class="accordionPanel">
					<p>Please direct them to our <a href="contact.php" title="Contact/Support">contact/support</a> page. We're happy to help!</p>
				</div>
			</section>
		</div>
		
		<script src="accordion.js" type="text/javascript"></script>
		<script src="header.js" type="text/javascript"></script>
		
		<?php include 'footer.php'; ?>
	</body>
</html>