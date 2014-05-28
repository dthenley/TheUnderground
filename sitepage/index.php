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

	<section class="top-half">

		<div class="col-md-9 crop">

			 <!-- Carousel================================================== -->
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		      <div class="carousel-inner">
		        <div class="item active">
		          <img src="images/fp1.jpg" alt="First slide">
		          <div class="container">
		            <div class="carousel-caption">
		            </div>
		          </div>
		        </div>
		        <div class="item">
		          <img src="images/fp2.jpg" alt="Second slide">
		          <div class="container">
		        
		          </div>
		        </div>
		        <div class="item">
		          <img src="images/fp3.jpg" alt="Third slide">

		        </div>
		      </div>
		      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		    </div><!-- /.carousel -->


		</div>

		<?php
			//if logged on 
			if (!empty($_SESSION['userid'])) {
				echo '<div class="col-md-3">';
				echo "<h1>Favorited Friends</h1>";
				echo "<ul>";
				echo ($favoriteList);
				echo "</ul>";

			}else{
				//if not logged on
				echo <<<SIGNUP
				<div class="col-md-3">
			
			<form role="form" method="POST">
			  <div class="form-group">
			    <label for="username">Username</label>
			    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" >
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
			  </div>
			  <div>
			  	<a href="">Forgot Password</a> | <a href="signup.php">Sign Up</a>
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>


		</div>


SIGNUP;
			}
		?> 
		
	</section>

		<section class="clear bottom-half">
			<div class="col-md-3 chat-icon">
				<ol>
					<h1>Active Rooms</h1>
					<li><a href="chat/index.php">
						<div class="hip-hop box"></div>
						<div class="chat-info">
							<h2>Hip-Hop</h2>
							<p>Wichita, KS</p>
						</div>
					</a></li>
					<li><a href="chat/index.php">
						<div class="pop box"></div>
						<div class="chat-info">
							<h2>Pop</h2>
							<p>Los Angeles, CA</p>
						</div>
					</a></li>
					<li><a href="chat/index.php">
						<div class="country box"></div>
						<div class="chat-info">
							<h2>Country</h2>
							<p>Nashville, TN</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="rap box"></div>
						<div class="chat-info">
							<h2>Rap</h2>
							<p>New York City, NY</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="rap box"></div>
						<div class="chat-info">
							<h2>Rap</h2>
							<p>Kansas City, MO</p>
						</div>	
					</a></li>
				</ol>
			</div>
			<div class="col-md-3 chat-icon">
				<ol>
					<h1>Popular Rooms</h1>
					<li><a href="chat/index.php">
						<div class="rap box"></div>
						<div class="chat-info">
							<h2>Rap</h2>
							<p>Dallas, TX</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="rap box"></div>
						<div class="chat-info">
							<h2>Rap</h2>
							<p>Pittsburg, PA</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="country box"></div>
						<div class="chat-info">
							<h2>Country</h2>
							<p>Nashville, TN</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="reggae box"></div>
						<div class="chat-info">
							<h2>Reggae</h2>
							<p>Queens, NY</p>
						</div>	
					</a></li>
					<li><a href="chat/index.php">
						<div class="pop box"></div>
						<div class="chat-info">
							<h2>Pop</h2>
							<p>Seattle, WA</p>
						</div>	
					</a></li>
				</ol>
			</div>
			<div class="col-md-3 chat-icon">
				
				<ol>
					<h1>Newest Songs Added</h1>
					<li id="play_music">
						<div id="jquery_jplayer_1"></div>
						<div id="jp_container_1">
							<a href="#" class="jp-play"><div class="rap box media"></div></a>
							<a href="#" class="jp-pause"><div class="rap box media-pause"></div></a>
						</div>
						<div class="chat-info">
							<h2>BBAS</h2>
							<p>Big Sam</p>
						</div>	
					</li>
					<li id="play_music">
						<div id="jquery_jplayer_2"></div>
						<div id="jp_container_2">
							<a href="#" class="jp-play"><div class="rap box media"></div></a>
							<a href="#" class="jp-pause"><div class="rap box media-pause"></div></a>
						</div>
						<div class="chat-info">
							<h2>Let it spill</h2>
							Ol' Boy
						</div>	
					</li>
					<li id="play_music">
						<div id="jquery_jplayer_3"></div>
						<div id="jp_container_3">
							<a href="#" class="jp-play"><div class="country box media"></div></a>
							<a href="#" class="jp-pause"><div class="country box media-pause"></div></a>
						</div>
						<div class="chat-info">
							<h2>Cut him loose</h2>
							Whitney Jean
						</div>	
					</li>
					<li id="play_music">
						<div id="jquery_jplayer_4"></div>
						<div id="jp_container_4">
							<a href="#" class="jp-play"><div class="country box media"></div></a>
							<a href="#" class="jp-pause"><div class="country box media-pause"></div></a>
						</div>
						<div class="chat-info">
							<h2>Big Truck</h2>
							<p>Cowboy Rob</p>
						</div>	
					</li>
					<li id="play_music">
						<div id="jquery_jplayer_5"></div>
						<div id="jp_container_5">
							<a href="#" class="jp-play"><div class="pop box media"></div></a>
							<a href="#" class="jp-pause"><div class="pop box media-pause"></div></a>
						</div>
						<div class="chat-info">
							<h2>Blue cups</h2>
							<p>Sarah Hub</p>
						</div>	
					</li>
				</ol>
			</div>

			<div class="col-md-3">
				<a width="100%" height="400" class="twitter-timeline" href="https://twitter.com/stunt_crazy" data-widget-id="426524851503763456">Tweets by @stunt_crazy</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


			</div>
		</section>
		
		<?php include_once 'includes/footer.php'; ?>
		
	</div>
</body>
</html>