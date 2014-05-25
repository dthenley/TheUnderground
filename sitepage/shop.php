<?php

	session_start();
	include_once 'connect_to_mysql.php';
	if(!empty($_SESSION['userid'])) {//if logged on
		//grabs the userid from the session
		$userid = $_SESSION['userid'];

		$sql = "SELECT * FROM users WHERE userid=:userid";

		$query = $db->prepare( $sql );
		$query->execute( array( ':userid'=>$userid) );
		$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

		foreach( $results as $row ){ 	
			$username = $row[ 'username'];
			$realname = $row[ 'realname'];
			$age = $row[ 'age'];
			$sex = $row[ 'sex'];
			$location = $row[ 'location'];
			$genre = $row[ 'genre'];
			$profileimg = $row[ 'profileimg'];
			$aboutme = $row[ 'aboutme'];
		}//foreach
	}
	else if(empty($_SESSION)){//if not logged on
		header('location: index.php');
	}


	$sql = "SELECT * FROM Music WHERE songArtist=:username";

	$query = $db->prepare( $sql );
	$query->execute( array( ':username'=>$username ) );
	$results = $query->fetchAll( PDO::FETCH_ASSOC ); 



	foreach( $results as $row ){ 	
	    $songArtist = $row[ 'songArtist' ];

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
		<div class="col-md-2">
			<img src="images/user-img/dontehenley.jpg">
		</div>
		<div class="col-md-2">
			<ul>
				<li><h2>Donte Henley</h2></li>
				<li>26, M</li>
				<li>Wichita, KS</li>
				<li>Hip-Hop</li>
			</ul>
		</div>

		<div class="col-md-5">
			<div class="profile-info">
				<p> Hi, My name is Donte Henley and I'm an indpendent artist based out of Wichita, KS. I have been rapping for 10 years and really hope you like my sound.
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
		<div class="col-md-12">
			<ol class="shop-list shop-section">

				
				<li>
					<div class="shop-name"><h2>Name</h2></div>
					<div class="shop-artist"><h2>Artist</h2></div>
					<div class="shop-price"><h2>Price</h2></div>
				</li>
				<?php 

				foreach( $results as $row ){ 	

					echo'<li>';
					echo	'<div class="shop-name">'.$row[ 'songName' ] .'</div>';
					echo	'<div class="shop-artist">'.$row[ 'songArtist' ].'</div>';
					echo	'<div class="shop-price">';
					echo		'<p>&#36;'.$row[ 'songPrice' ].'</p>';
					echo		'<button type="button" class="btn btn-primary btn-xs shop-btn">Buy</button>';
					echo		'<button type="button" class="btn btn-primary btn-xs shop-btn">Share</button>';
					echo	'</div>';
					echo'</li>';
				}
				?>
				

			</ol>
		</div>

	</section>


	<?php include_once 'includes/footer.php'; ?>
	
</div>
</body>
</html>