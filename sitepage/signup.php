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
	<div class="signup_form">

		<form role="form" method="POST">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="myusername" placeholder="Enter Username" name="username" >
		  </div>
		  <div class="form-group">
		    <label for="username">Email Address</label>
		    <input type="email" class="form-control" id="myemail" placeholder="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="mypassword" placeholder="Password" name="password">
		  </div>
		  <div class="form-group">
		    <label for="realname">Real Name</label>
		    <input type="text" class="form-control" id="myrealname" placeholder="John Doe" name="realname">
		  </div>
		  <div class="form-group">
		    <label for="age">Age</label>
		    <input type="text" class="form-control" id="myage" placeholder="26" name="age">
		  </div>
		  <div class="form-group">
		    <label for="sex">Sex</label>
		    <select type="text" class="form-control" id="mysex" name="sex">
		    	<option>Male</option>
		    	<option>Female</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="location">Location</label>
		    <input type="text" class="form-control" id="mylocation" placeholder="Wichita, KS" name="location">
		  </div>
		  <div class="form-group">
		    <label for="genre">Genre</label>
		    <select type="text" class="form-control" id="genre" name="genre">
		    	<option>Hip-Hop/Rap</option>
		    	<option>Country</option>
		    	<option>Pop</option>
		    	<option>Reggae</option>
		    </select>
		  </div>
		  <div class="form-group">
		  	<label for="aboutme">About Me</label>
		  	<textarea class="form-control" rows="3" id="aboutme" name="aboutme"></textarea>
		  </div>
		  <div class="form-group">
		  	<label for="profileimg">Profile Image</label>
		  	<input type="file" class="form-control" id="myprofileimg" name="profileimg">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
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