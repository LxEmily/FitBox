<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<?php include 'content/resources.php'; ?>
		<link rel="stylesheet" href="accordion/accordion.css">	
		<link rel="stylesheet" href="header/header.css">	
	</head>
	
	<body>
		<?php include 'nav/nav.php'; ?>
		
		<header class="header header_short">
			<h1>The About Section</h1>
			<p>Everything you need to know about FitBox.</p>
		</header>
		
		<section class="accordionAll container">
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="About the site">The Site</h2>
				</button>
				<div class="accordionPanel">
					<p>We are a team of passionate curators who enjoy premium fitness and nutrition related products and are delighted to bring you our finds. Please <a href="faq.php">view our FAQ</a> or <a href="contact.php">contact us</a> for more info.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="About this project">The Project</h2>
				</button>
				<div class="accordionPanel">
					<p>This is a mock-up of a subscription box catering to young adults who are interested in fitness and nutrition. It supposedly costs &euro;40 per box and is delivered bi-monthly. It's main point is to surprise the customer and introduce them to several full-sized products they have never encountered at a more affordable price point.</p>
					
					<p>This mock-up was done as a project for UCD COMP20030 Web Design module. The product does not exist.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="About the author">The Author</h2>
				</button>
				<div class="accordionPanel">
					<ul class="unorderedList">
						<li>Liew Xuan</li>
						<li><a href="mailto:xuan.liew@ucdconnect.ie" title="Email">xuan.liew@ucdconnect.ie</a></li>
					</ul>						
					<p>Email for any enquiries.</p>
				</div>
			</section>
			
			<section class="accordionGroup">
				<button class="accordionBtn">
					<h2 title="More information on FitBox">More information on FitBox</h2>
				</button>
				<div class="accordionPanel">
					<ul class="unorderedList">
						<li><a href="faq.php" title="FAQ">Frequently Asked Questions</a></li>
						<li><a href="contact.php" title="Contact/Support">Contact/Support</a></li>
						<li><a href="privacy.php" title="Privacy">Privacy</a></li>
						<li><a href="terms.php" title="Terms">Terms</a></li>
					</ul>
				</div>
			</section>
		</section>
		
		<script src="accordion/accordion.js" type="text/javascript"></script>
		<script src="header/header.js" type="text/javascript"></script>
		
		<?php include 'footer/footer.php'; ?>
	</body>
</html>