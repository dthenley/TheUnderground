<?php
	session_start();
	include_once 'connect_to_mysql.php';

	if(!empty($_SESSION['userid'])) 
		{
			//if logged on
			//grabs the userid from the session
			$userid = $_SESSION['userid'];

			//compiles the data from the database according to userid
			$sql = "SELECT * FROM users WHERE userid=:userid";

			//query the database and runs it
			$query = $db->prepare( $sql );
			$query->execute( array( ':userid'=>$userid) );
			$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

			//store the variables in the database
			foreach( $results as $row ){ 		
				$username = $row[ 'username'];
				$email = $row[ 'email'];
				$password = $row[ 'password'];
				$realname = $row[ 'realname'];
				$age = $row[ 'age'];
				$sex = $row[ 'sex'];
				$location = $row[ 'location'];
				$genre = $row[ 'genre'];
				$aboutme = $row[ 'aboutme'];
				$profileimg = $row[ 'profileimg'];
			}//foreach

			//Submit new data
			if($_POST){
				$query = $db->prepare ("DELETE FROM users WHERE userid=".$userid);
				try{
					$query->execute();
					header('location: logout.php');

					} catch(PDOException $e){
					echo 'error'.$e->getMessage;
					}
				}
		}
		else if(empty($_SESSION))
		{
			//if not logged on
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

	<div class="delete_form">

		<form role="form" method="POST">
		  <div class="form-group">
		    <label for="username">Are you sure you want to delete</label>
		    <select type="text" class="form-control" id="delete" name="delete">
		    	<option></option>
		    	<option>Yes</option>
		    	<option>No</option>
		    </select>

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