<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Me | Sapan Verma</title>
		<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/header.js"></script>
		<!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="icon" type="image/png" xhref="/favicon.png"> -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="/favicon.png"/>

		<link rel="stylesheet" href="bower_components/normalize-css/normalize.css" />
		<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/assets/css/college.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/contact.css" />
		<script type="text/javascript">
			$(document).ready(function() {
				$(window).resize(function(){
					var height = $('.mailbox').height()
					$('.mailbox .name').css('top',Math.round(0.2026 * height) + 'px')
				})
			})
		</script>
	</head>
	<body>
		<div class="dim-cloak"></div>
		<aside class="mobile-navbar">
			<i class="fa fa-remove"></i>
			<a href="/">Home</a>
			<a href="/profile.html">Profile</a>
			<a href="/videos.html">Videos</a>
			<a href="/corporate.html">Corporate Shows</a>
			<a href="/college.html">College Gigs</a>
			<a href="/contact.php">Contact Me</a>
		</aside>
		<header>
			<i class="fa fa-align-justify"></i>
			<nav>
				<div><a href="/" class="uppercase">Home</a></div>
				<div><a href="/profile.html" class="uppercase">Profile</a></div>
				<div class="uppercase" style="position:relative;">
					<div class="title">Videos</div>
					<div class="dropdown">
						<a href="/videos.html">Standup Comedy</a>
						<a href="/direction_showreel.html">Directional <br /> Showreel</a>
					</div>
				</div>
				<div><a href="/corporate.html" class="uppercase">Corporate Shows</a></div>
				<div><a href="/college.html" class="uppercase">College Gigs</a></div>
				<div><a href="/contact.php" class="uppercase">Contact Me</a></div>
			</nav>
			<section class="social-icons">
				<a href="https://www.facebook.com/TheSapanVerma" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/sapanv" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.youtube.com/user/EastIndiaComedy" target="_blank"><i class="fa fa-youtube"></i></a>
				<a href="https://instagram.com/sapanv/" target="_blank"><i class="fa fa-instagram"></i></a>
			</section>
		</header>
		<div class="main-body-wrapper">
			<p class="intro-line">Got an event, a corporate show, a college festival or a party coming up? Feel free to hire me. I like money.</p>

			<div class="mailbox">
			<?php
				//if "email" variable is filled out, send email

			    $name=$_POST['name'];
			    $email=$_POST['email'];
			    $message=$_POST['message'];

		    	$admin_email = "contact@sapanverma.in";
		        $from='From:'. $email . "\r\n";;
		        $subject="Message from SapanVerma.IN";
		        if (isset($_POST['submit'])) {
		        	if (mail($admin_email, $subject, $message, $from)) {
			        	echo "Email sent!";
			        }
			        else {
				        echo '<p>Something went wrong, go back and try again!</p>';
				    }
		   		}
		      ?>
				<form action="" method="post">

				<input name="name" type="text" class="name" />

				<input name="email" type="email" class="email" />

				<input name="mobile" type="text" class="mobile" />

				<textarea name="message" type="text" rows="10" columns="20"></textarea>
				<input class="mailer" name="submit" type="submit" value="SUBMIT" />
				</form>
			</div>
			<div class="mailbox-mobile">
				<label>Name:</label>
				<input type="text" class="name" />
				<label>Email Id:</label>
				<input type="email" class="email" />
				<label>Contact no.</label>
				<input type="text" class="mobile" />
				<label>Event Description (date,venue,city,occasion,etc.)</label>
				<textarea rows="10" columns="20"></textarea>
				<input name="submit" type="submit" value="SUBMIT" />

			</div>
		</div>
		<footer>
			<div class="credit"><a href="https://www.facebook.com/middleofsomething" target="_blank">Design: Saakshi Vyas</div>
			<div class="copyright">2015 Sapan Verma</div>
			<div class="to-top"><a href="#">Back to top</a></div>
		</footer>
	</body>
</html>
