<?php
	session_start();//start session
	include_once 'connect_to_mysql.php';
	include_once 'user_auth.php';




	if($_POST){

		if(!empty($_POST['comment'])){
			if($username == $profilename){
				$newcomment = ('<li><div class="artist-icon img-circle"></div><div class="artist-comment"><a href="profile.php?userid='.$userid.'"><h2>'.$username.':</h2></a><p>'.$_POST['comment'].'</p></div></li>');
				$query = $db->prepare("
					UPDATE users 
					SET 
						 comment = '".$newcomment.$comment."'
					WHERE userid=".$userid
				);

				$routeback = '"profile.php?userid="'.$userid.'"';

			}else{
				$newcomment = ('<li><div class="user-icon img-circle"></div><div class="user-comment"><a href="profile.php?userid='.$userid.'"><h2>'.$username.':</h2></a><p>'.$_POST['comment'].'</p></div></li>');
				$query = $db->prepare("
					UPDATE users 
					SET 
						 comment = '".$newcomment.$comment."'
					WHERE userid=".$profileid
				);
			}
		}

		try{
			$query->execute();
			//print_r($query);
		} catch(PDOException $e){
		echo 'error'.$e->getMessage;
		}

		header('location: index.php');

	}

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
					<li><h2><?php echo($profilename) ?></h2></li>
					<li><?php echo($age) ?>, <?php echo($sex) ?></li>
					<li><?php echo($location) ?></li>
					<li><?php echo($genre) ?></li>
				</ul>
			</div>

			<div class="col-md-5">
				<div class="profile-info">
					<h2>About Me:</h2><p><?php echo($aboutme) ?>
					</p>			
				</div>
			</div>
			<div class="col-md-3">
				<p>
					<button type="button" class="btn btn-primary btn-lg" id="followButton">+Follow</button>
					<button type="button" class="btn btn-primary btn-lg" id="shareButton">Share</button>
					<button type="button" class="btn btn-primary btn-lg" id="favoriteButton">Favorite</button>
					<button type="button" class="btn btn-primary btn-lg" id="messageButton">Message</button>
				</p>
			</div>
		</section>
		<section>
			<div class="col-md-2 chat-icon profile-music">

				<ol>
					
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
							<h2>Cut him</h2>
							Whitney Jean
						</div>	
					</li>
					
				</ol>
			</div>
			<div class="col-md-10">
				<div class="comments">
					<form role="form" method="POST">
					  <div>
					  	<input type="text" class="form-control comment-text" placeholder="Enter Comment...." name="comment">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					

					<ul>
						<?php 

							echo ($comment);

						?>
							
					</ul>
				</div>
			</div>

		</section>


		<?php include_once 'includes/footer.php'; ?>

	</div>
</body>
</html>