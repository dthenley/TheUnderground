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
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="wrapper">
	<?php include_once 'includes/header2.php' ?>
	
	<div  data-href="http://www.2beatzboutique.com" data-type="button_count">
	<button type="button" class="btn btn-primary btn-lg">Share</button>
</div>


		<footer>
			<div class="footer">
				<ul class="col-md-3 footer-col">
					<h2>Sitemap</h2>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="chat/index.php">Chat</a></li>
					<li><a href="shop.html">Shop</a></li>
				</ul>
				<ul class="col-md-3 footer-col">
					<h2>Contact</h2>
					<li><a href="">Email</a></li>
					<li><a href="">Twitter</a></li>
					<li><a href="">Facebook</a></li>			
				</ul>
				<ul class="col-md-3 footer-col">
					<h2>Legal</h2>
					<li><a href="">Terms of Use</a></li>
					<li><a href="">Privacy</a></li>
				</ul>

				<div class="col-md-3 footer-col">
					<form role="form">
					  <div class="form-group">
					    <label for="newsletterEmail">Newsletter</label>
					    <input type="email" class="form-control" id="newsletter" placeholder="Enter email" name="newsletter">
					  </div>
					  <button type="submit" class="btn btn-default" name="newsletter">Submit</button>
					</form>
				</div>
			</div>
		</footer>

		<div class="subfooter">
			<div class="pull-left">
				&copy;The Underground All Rights Reserved
			</div>
			<div class="pull-right">Created By Donte Web Design</div>
		</div>


		<script src="js/bootstrap.js"></script><!-- Bootstrap Javascript -->
		
	</div>
</body>
</html>