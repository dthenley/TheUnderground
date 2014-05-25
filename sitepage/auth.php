<?php
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
			$favoriteList = $row['favoriteList'];
		}//foreach
	}
	else if(empty($_SESSION)){//if not logged on
		if ($_POST ){
			 $form_data = $_POST;

			$username = $_POST[ 'username' ];
			$password = $_POST[ 'password' ];
		
			$sql = "SELECT * FROM users WHERE username=:username and password=:password";

			$query = $db->prepare( $sql );
			$query->execute( array( ':username'=>$username,':password'=>$password ) );
			$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

			foreach( $results as $row ){ 	
			    $userid = $row[ 'userid' ];
			    if($userid >0){
			    	//Login now works
			    	//input session id
			    	$_SESSION['userid']=$userid;
			    	header('location: profile.php');
			}
		}
	} 
}
?>
