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
				//checks for the music file
				if(!empty($_FILES['musicFile']))
				{	

					$fileType = '';
					//takes the type of the file
					$fileType = ($_FILES["musicFile"]["type"]);
					// verify the file is a mp4 or mp3
					if ($fileType == 'audio/mp4' || $fileType == 'audio/mpeg' || $fileType == 'audio/mp3' ) 
					{
						//specify the file path where the music file is going to be stored
						$filepath = '/applications/MAMP/htdocs/fullsail/FinalProject/TheUnderground/sitepage/audio/';
						//grabs the file from the temporary folder and place it in the audio folder
						move_uploaded_file($_FILES["musicFile"]["tmp_name"], $filepath.$_FILES["musicFile"]["name"]);
						$musicFile = 'audio'.$_FILES["musicFile"]["name"];

						
					}else
					{
						echo "Wrong filetype";
					}	
				}

				if(!empty($_POST['songName'])){
					$songName = $_POST[ 'songName' ];
				}
				$songArtist = $username;
				if(!empty($_POST['genre'])){
					$genre = $_POST[ 'genre' ];
				}else{ $genre=NULL;}
				if(!empty($_POST['songPrice'])){
					$songPrice = $_POST[ 'songPrice' ];
				}else{ $songPrice=NULL;}
				if(!empty($_POST['songAlbum'])){
					$songAlbum = $_POST[ 'songAlbum' ];
				}else{ $songAlbum=NULL;}
				if(!empty($_POST['buyLink'])){
					$buyLink = $_POST[ 'buyLink' ];
				}else{ $buyLink=NULL;}
				if(!empty($_POST['shareLink'])){
					$shareLink = $_POST[ 'shareLink' ];
				}else{ $shareLink=NULL;}

				$albumImg = $profileimg;

				//Insert music data into database

				$sql = "INSERT INTO Music (musicFile, songName, songArtist, genre, songPrice, songAlbum, albumImg, buyLink, shareLink)VALUES(:musicFile, :songName, :songArtist, :genre, :songPrice, :songAlbum, :albumImg, :buyLink, :shareLink) ";

				$query = $db->prepare($sql);
				
				


				try{
					$query->execute( array( ':musicFile'=>$musicFile, ':songName'=>$songName, ':songArtist'=>$songArtist, ':genre'=>$genre, ':songPrice'=>$songPrice, ':songAlbum'=>$songAlbum, ':albumImg'=>$albumImg, ':buyLink'=>$buyLink, ':shareLink'=>$shareLink  ) );

					header('location: shop.php');
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

	<div class="signup_form">

		<form role="form" method="POST" enctype="multipart/form-data">
		  <!-- Upload the music file -->
		   <div class="form-group">
		  	<label for="music">Music File</label>
		  	<input type="file" class="form-control" id="music" name="musicFile" required>
		  </div>

		  <!-- Song Name -->
		  <div class="form-group">
		    <label for="songName">Song Name</label>
		    <input type="text" class="form-control" id="songName" placeholder="Song..." name="songName" required>
		  </div>

		  <!-- Song Genre -->
		  <div class="form-group">
		    <label for="genre">Genre</label>
		    <select type="text" class="form-control" id="mygenre" name="genre" required>
		    	<option></option>
		    	<option>Hip-Hop/Rap</option>
		    	<option>Country</option>
		    	<option>Pop</option>
		    	<option>Reggae</option>
		    </select>
		  </div>

		  <!-- Song Price  -->
		  <div class="form-group">
		    <label for="songPrice">Song Price</label>
		    <input type="text" class="form-control" id="songPrice"  name="songPrice" >
		  </div>

		  <!-- Album Name  -->
		  <div class="form-group">
		    <label for="songAlbum">Album Name</label>
		    <input type="text" class="form-control" id="songAlbum"  name="songAlbum" >
		  </div>

		  <!--Buy Link -->
		  <div class="form-group">
		  	<label for="buyLink">Buy Link(external services)</label>
		  	<input type="text" class="form-control" id="buyLink" name="buyLink">
		  </div>
		  
		  <!--Share Link -->
		  <div class="form-group">
		  	<label for="shareLink">Share Link(external services)</label>
		  	<input type="text" class="form-control" id="shareLink" name="shareLink">
		  </div>
		  
		 
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
		
	<?php include_once 'includes/footer.php'; ?>
	
</div>
</body>
</html>