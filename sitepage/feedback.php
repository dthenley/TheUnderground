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

			
		}
		else if(empty($_SESSION))
		{
			
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

	<div class="signup_form">

		<form role="form" method="POST" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="username">Email Address</label>
		    <input type="email" class="form-control" id="myemail" placeholder="email" name="email" required>
		  </div>
		  <div class="form-group">
		  	<label for="acctType">Subject</label>
			<input type="text" class="form-control" id="myrealname" placeholder="John Doe" name="realname">
		  </div>
		  
		  <div class="form-group">
		  	<label for="aboutme">About Me</label>
		  	<textarea class="form-control" rows="4" id="aboutme" name="aboutme"></textarea>
		    
		</div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
		
	<?php include_once 'includes/footer.php'; ?>
	
</div>
</body>
</html>