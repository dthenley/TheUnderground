<?php
	session_start();//start session
	include_once 'connect_to_mysql.php';
	include_once 'user_auth.php';

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
			 		<img src="images/fp3.jpg">
			 	</div>
			 </div>

		</section>

		<section class="clear profile">	
			<div class="col-md-2 profile-img">
				<img src=<?php echo($profileimg) ?>>
			</div>
			<div class="col-md-2">
				<ul>
					<li><h2><?php echo($realname) ?></h2></li>
					<li><?php echo($age) ?>, <?php echo($sex) ?></li>
					<li><?php echo($location) ?></li>
					<li><?php echo($genre) ?></li>
				</ul>
			</div>

			<div class="col-md-5">
				<div class="profile-info">
					<p><?php echo($aboutme) ?>
					</p>			
				</div>
			</div>
			<div class="col-md-3">
				<p>
					<button type="button" class="btn btn-primary btn-lg">+Follow</button>
					<button type="button" class="btn btn-primary btn-lg">Share</button>
					<button type="button" class="btn btn-primary btn-lg">Favorite</button>
					<button type="button" class="btn btn-primary btn-lg">Message</button>
				</p>
			</div>
		</section>
		<section>
			<div class="col-md-2 chat-icon profile-music">

				<ol>
					
					<li id="play_music">
						<div class="rap box media"></div>
						<div class="chat-info">
							<h2>Genre</h2>
							<p>City,ST</p>
						</div>	
					</li>
					<h1>Songs</h1>
					<li id="play_music">
						<div class="rap box media"></div>
						<div class="chat-info">
							<h2>Genre</h2>
							<p>City,ST</p>
						</div>	
					</li>
					<li id="play_music">
						<div class="country box media"></div>
						<div class="chat-info">
							<h2>Genre</h2>
							<p>City,ST</p>
						</div>	
					</li>
					<li id="play_music">
						<div class="country box media"></div>
						<div class="chat-info">
							<h2>Genre</h2>
							<p>City,ST</p>
						</div>	
					</li>
					<li id="play_music">
						<div class="pop box media"></div>
						<div class="chat-info">
							<h2>Genre</h2>
							<p>City,ST</p>
						</div>	
					</li>
				</ol>
			</div>
			<div class="col-md-10">
				<div class="comments">
					<input type="comment" class="form-control comment-text" placeholder="Enter Comment....">
					<button type="button" class="btn btn-primary btn-lg comment-submit">Large button</button>
					<ul>
						<li>
							<div class="artist-icon img-circle"></div>
							<div class="artist-comment">
								<h2>Artist Name:</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in feugiat urna. Nullam vel ipsum dapibus, porttitor odio ac, sagittis mauris. In id elit at sapien gravida mollis ac non felis. Suspendisse potenti. Nullam gravida dapibus nisi, sed dapibus mi adipiscing vitae. Suspendisse feugiat sagittis mauris, sed congue orci volutpat eget. 
								</p>
							</div>
						</li>
						<li>
							<div class="user-icon img-circle"></div>
							<div class="user-comment">
								<h2>User Name:</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in feugiat urna. Nullam vel ipsum dapibus, porttitor odio ac, sagittis mauris. In id elit at sapien gravida mollis ac non felis. Suspendisse potenti. Nullam gravida dapibus nisi, sed dapibus mi adipiscing vitae. Suspendisse feugiat sagittis mauris, sed congue orci volutpat eget. 
								</p>
							</div>
						</li>
						<li>
							<div class="artist-icon img-circle"></div>
							<div class="artist-comment">
								<h2>Artist Name:</h2>
								<p>
									Whitney Jean:   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in feugiat urna. Nullam vel ipsum dapibus. 
								</p>
							</div>
						</li>
						<li>
							<div class="user-icon img-circle"></div>
							<div class="user-comment">
								<h2>User Name:</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in feugiat urna. Nullam vel ipsum dapibus. :  Visitor 2 
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</section>


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