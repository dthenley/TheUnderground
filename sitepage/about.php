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
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed nisi enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer aliquam purus lacus, in vehicula nisi aliquet nec. Nullam semper eros nunc, sit amet porttitor arcu varius eu. Suspendisse potenti. Pellentesque bibendum malesuada felis sit amet faucibus. Ut porttitor egestas urna, et commodo sapien semper eu. Aenean faucibus condimentum ligula, eu porttitor purus pretium vel. Phasellus a felis urna.
				</p>
			</div>
		</section>
		<section class="benefits">
			<h1>What Can you do?</h1>
			<div class="col-md-6 about-info user-sect">
				<div class="user img-circle"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed nisi enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer aliquam purus lacus, in vehicula nisi aliquet nec. Nullam semper eros nunc, sit amet porttitor arcu varius eu. Suspendisse potenti. Pellentesque bibendum malesuada felis sit amet faucibus. Ut porttitor egestas urna, et commodo sapien semper eu. Aenean faucibus condimentum ligula, eu porttitor purus pretium vel. Phasellus a felis urna.
				</p>			
			</div>
			<div class="col-md-6 about-info">
				<div class="artist img-circle"></div>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed nisi enim. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer aliquam purus lacus, in vehicula nisi aliquet nec. Nullam semper eros nunc, sit amet porttitor arcu varius eu. Suspendisse potenti. Pellentesque bibendum malesuada felis sit amet faucibus. Ut porttitor egestas urna, et commodo sapien semper eu. Aenean faucibus condimentum ligula, eu porttitor purus pretium vel. Phasellus a felis urna.
				</p>
			</div>
		</section>
		<footer class="about-footer">
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
					    <label for="exampleInputEmail1">Newsletter</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
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