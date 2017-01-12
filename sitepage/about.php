<?php

	session_start();
	include_once 'connect_to_mysql.php';
	include_once 'auth.php';	

?>

<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
	<title>The Underground</title>

	<!--Css files-->
	<link rel="stylesheet" href="css/normalize.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/site.css">
	<link type="text/css" href="skin/jplayer.blue.monday.css" rel="stylesheet" />

	<!--JS Files -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
	<script src="js/site.js"></script>

</head>
<body>

<div class="wrapper">

	<?php include_once 'includes/header.php' ?>


		<section>
			 <div class="jumbotron crop about-img">
			 	<div class="container">
			 		<img src="images/fp2.jpg">
			 	</div>
			 </div>

		</section>

		<section class="clear thought">	
			<div class="col-md-3">
				<img src="images/user-img/dontehenley.jpg">
			</div>
			<div class="col-md-9">
				<h1>THE THOUGHT</h1>
				<p>
					The thought for The Underground come from the idea of searching for quality music from local artist. It serves as a meeting place where music artists and music lovers can meet and enjoy music in a constructive environment. Not everyone is a fan of 'mainstream' music and this is where The Underground will flourish. Find a local chat room that plays music from local artist and give them feedback on if you like their music or if not, the reason you don't. We highly discourage bullying and have a zero tolerance on the subject, the main point of this site is to help your local artist grow. Thank you and please enjoy our site.
				</p>
			</div>
		</section>
		<section class="benefits">
			<h1>What Can you do?</h1>
			<div class="col-md-6 about-info user-sect">
				<div class="user img-circle"></div>
				<p>As a User on The Underground you play a vital role in helping the local artist grow and blossom into their full potential. Each user is encouraged to go to the local chat room of their favorite genre to discover talent in their area. We hope that the User think of The Underground as a starting place of which to hear their local artist, they are also encourage to buy their material and go to their shows.
				</p>			
			</div>
			<div class="col-md-6 about-info">
				<div class="artist img-circle"></div>
				<p>
					As a Artist on The Underground you are encourage to share your music with your peers and fellow music-lovers. We hope that you use this site as a source of inspiration and growth. We hope that you will share your music with our site so that we can play it in chat rooms and more Users and other Artists can provide you with feedback.
				</p>
			</div>
		</section>
		
		<?php include_once 'includes/footer.php'; ?>
		
	</div>
</body>
</html>