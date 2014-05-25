<?php
	//check if the user is logged in
	if (empty($_SESSION)) {
		header('Location: index.php');
	}


	if(!empty($_GET['userid'])){
		$userid = $_GET['userid'];
		$_SESSION['profileid'] = $userid;
	}else{
		//grabs the userid from the session
		$userid = $_SESSION['userid'];
	}	

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
		$comment = $row[ 'comment' ];
	}//foreach

?>
