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
				if(!empty($_POST['email'])){
					$email = $_POST[ 'email' ];
				}
				if(!empty($_POST['password'])){
					$password = $_POST[ 'password' ];
				}	
				if(!empty($_POST['realname'])){
					$realname = $_POST[ 'realname' ];
				}
				
				if(!empty($_POST['age'])){
					$age = $_POST[ 'age' ];
				}
				if(!empty($_POST['sex'])){
					$sex = $_POST[ 'sex' ];
				}
				if(!empty($_POST['location'])){
					$location = $_POST[ 'location' ];
				}
				if(!empty($_POST['genre'])){
					$genre = $_POST[ 'genre' ];
				}
				if(!empty($_POST['aboutme'])){
					$aboutme = $_POST[ 'aboutme' ];
				}
				//if(!empty($_POST['myprofileimg'])){
					//check tp see if a file has been added
					if(!empty($_FILES['myprofileimg']))
					{

						// verify the file is a GIF, JPEG, or PNG
						$fileType = exif_imagetype($_FILES["myprofileimg"]["tmp_name"]);
						$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
						if (!in_array($fileType, $allowed)) 
						{
							echo "Wrong filetype";
						}else
						{
							//specify the file path where the profile image is going to be stored
							$filepath = '/applications/MAMP/htdocs/fullsail/FinalProject/TheUnderground/sitepage/images/user-img/';
							//grabs the file from the temporary folder and place it in the user-img folder
							move_uploaded_file($_FILES["myprofileimg"]["tmp_name"], $filepath.$_FILES["myprofileimg"]["name"]);
							$profileimg = 'images/user-img/'.$_FILES["myprofileimg"]["name"];
						}	
					}

				//}
					//update user
					$query = $db->prepare("
						UPDATE users 
						SET 
							 email = '".$email."',
							 password = '".$password."', 
							 realname = '".$realname."', 
							 age = ".$age.", 
							 sex = '".$sex."', 
							 location = '".$location."', 
							 genre = '".$genre."', 
							 aboutme = '".$aboutme."', 
							 profileimg = '".$profileimg."'
						WHERE userid=".$userid
						);

					try{
						$query->execute();
						//print_r($query);
					} catch(PDOException $e){
					echo 'error'.$e->getMessage;
					}

			}
		}
		else if(empty($_SESSION))
		{
			//if not logged on
			if ($_POST ){
				$form_data = $_POST;

				$username = $_POST[ 'username' ];
				$email = $_POST[ 'email' ];
				$password = $_POST[ 'password' ];
				$realname = $_POST[ 'realname' ];
				$acctType = $_POST[ 'acctType' ];
				$age = $_POST[ 'age' ];
				$sex = $_POST[ 'sex' ];
				$location = $_POST[ 'location' ];
				$genre = $_POST[ 'genre' ];
				$profileimg = $_POST[ 'myprofileimg' ];

				//check tp see if a file has been added
				if(!empty($_FILES))
				{
					// verify the file is a GIF, JPEG, or PNG
					$fileType = exif_imagetype($_FILES["myprofileimg"]["tmp_name"]);
					$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
					if (!in_array($fileType, $allowed)) 
					{
						echo "Wrong filetype";
					}else
					{
						//specify the file path where the profile image is going to be stored
						$filepath = '/applications/MAMP/htdocs/fullsail/FinalProject/TheUnderground/sitepage/images/user-img/';
						//grabs the file from the temporary folder and place it in the user-img folder
						move_uploaded_file($_FILES["fileToUpload"]["mytmp_name"], $filepath.$_FILES["myprofileimg"]["name"]);
						$profileimg = 'images/user-img/'.$_FILES["myprofileimg"]["name"];
					}
				}
				if(empty($_FILES))
				{
					//echo 'some shit went wrong';
					$profileimg = 'images/user-img/defaultuser.jpg';
				}

				$sql = "INSERT INTO users (username, email, password, realname, acctType, age, sex, location, genre, aboutme,profileimg)VALUES(:username, :email, :password, :realname, :acctType, :age, :sex, :location, :genre, :aboutme, :profileimg) ";

				$query = $db->prepare($sql);
				
				$query->execute( array( ':username'=>$username, ':email'=>$email,':password'=>$password, ':realname'=>$realname,':acctType'=>$acctType, ':age'=>$age, ':sex'=>$sex,':location'=>$location,':genre'=>$genre,':aboutme'=>$aboutme,':profileimg'=>$profileimg  ) );


				                                       
				header('location: profile.php');

				/*
				foreach( $results as $row ){ 	
				    $userid = $row[ 'userid' ];
				    if($userid >0){
				    	//Login now works
				    	//input session id
				    	$_SESSION['userid']=$userid;
				    	header('location: profile.php');
					}
				}*/
		} 
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
		    <label for="username">Username</label>
		    <?php
				//if logged on 
				if (!empty($_SESSION['userid'])) {
					echo '<input type="text" class="form-control" id="myusername" placeholder="'.$username.'" name="username" value="'.$username.'" disabled>';
				}else{
					//if not logged on
					echo '<input type="text" class="form-control" id=myusername placeholder="Enter Username" name="username" >';
				
				}
			?> 
		    
		  </div>
		  <div class="form-group">
		    <label for="username">Email Address</label>
		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<input type="email" class="form-control" id="myemail" placeholder="'.$email.'" name="email" value ="'.$email.'" disabled>';
				}else{//if logged on
					echo '<input type="email" class="form-control" id="myemail" placeholder="email" name="email" required>';
				}
			?> 
		    
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<input type="password" class="form-control" id="myemail" placeholder="********" name="email" value="'.$password.'" disable>';
				}else{//if logged on
					echo '<input type="password" class="form-control" id="mypassword" placeholder="Password" name="password">';
				}
			?> 
		  </div>
		  <div class="form-group">
		  	<label for="acctType">Real Name</label>
		  	<?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<input type="text" class="form-control" id="myrealname" placeholder="'.$realname.'"" name="realname" value="'.$realname.'">';
				}else{//if logged on
					echo '<input type="text" class="form-control" id="myrealname" placeholder="John Doe" name="realname">';
				}
			?> 
		  </div>
		  <div class="form-group">
		    <label for="realname">Account Type</label>

		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<select type="text" class="form-control" id="acctType" name="acctType" disabled>';
			    	echo '<option>'.$acctType.'</option>';
			    	echo '<option>user</option>';
			    	echo '<option>artist</option>';
			    	echo '</select>';
				}else{//if not logged on
					echo '<select type="text" class="form-control" id="acctType" name="acctType" required>';
			    	echo '<option></option>';
			    	echo '<option>user</option>';
			    	echo '<option>artist</option>';
			    	echo '</select>';
				}
			?> 
		  </div>
		  <div class="form-group">
		    <label for="age">Age</label>
		    
		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<input type="text" class="form-control" id="myage" placeholder="'.$age.'" name="age" value="'.$age.'">';
				}else{//if logged on
					echo '<input type="text" class="form-control" id="myage" placeholder="age" name="age" >';
				}
			?> 
		  </div>
		  <div class="form-group">
		    <label for="sex">Sex</label>
		    <select type="text" class="form-control" id="mysex" name="sex">
		    	<option></option>
		    	<option>Male</option>
		    	<option>Female</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="location">Location</label>
		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<input type="text" class="form-control" id="mylocation" placeholder="'.$location.'" name="location" value="'.$location.'">';
				}else{//if logged on
					echo '<input type="text" class="form-control" id="mylocation" placeholder="City, St" name="location">';
				}
			?> 
		  </div>
		  <div class="form-group">
		    <label for="genre">Genre</label>
		    <select type="text" class="form-control" id="mygenre" name="genre">
		    	<option></option>
		    	<option>Hip-Hop/Rap</option>
		    	<option>Country</option>
		    	<option>Pop</option>
		    	<option>Reggae</option>
		    </select>
		  </div>
		  <div class="form-group">
		  	<label for="aboutme">About Me</label>
		    <?php
				if (!empty($_SESSION['userid'])) {//if logged on 
					echo '<textarea class="form-control" rows="4" id="aboutme" name="aboutme" placeholder="'.$aboutme.'" value="'.$aboutme.'"></textarea>';
				}else{//if logged on
					echo '<textarea class="form-control" rows="4" id="aboutme" name="aboutme"></textarea>';
				}
			?> 
		</div>
		  <div class="form-group">
		  	<label for="profileimg">Profile Image</label>
		  	<input type="file" class="form-control" id="myprofileimg" name="myprofileimg">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div class="delete">
	<?php
		//if logged on 
		if (!empty($_SESSION['userid'])) {
			echo '<a href="delete.php">Delete Profile </a>';
		}else{
			//if logged on
		
		}
	?> 
	</div>
		
	<?php include_once 'includes/footer.php'; ?>
	
</div>
</body>
</html>