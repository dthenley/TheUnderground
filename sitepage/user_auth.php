<?php
	//if the user is not logged in
	if (empty($_SESSION)) {
		header('Location: index.php');
	}

	//if not viewing own profile
	if(!empty($_GET['userid'])){
		
		$userid = $_SESSION['userid'];

		$profileid = $_GET['userid'];
		$_SESSION['profileid'] = $profileid;

		$sql = "SELECT * FROM users WHERE userid=:userid";

		$query = $db->prepare( $sql );
		$query->execute( array( ':userid'=>$profileid) );
		$results = $query->fetchAll( PDO::FETCH_ASSOC ); 
		if (empty($results)){
			header('location: index.php');
		}

		foreach( $results as $row ){ 	
			$profileid = $row['userid'];
			$profilename = $row[ 'username'];
			$realname = $row[ 'realname'];
			$age = $row[ 'age'];
			$sex = $row[ 'sex'];
			$location = $row[ 'location'];
			$genre = $row[ 'genre'];
			$profileimg = $row[ 'profileimg'];
			$aboutme = $row[ 'aboutme'];
			$comment = $row[ 'comment' ];
		}//foreach


	}else{//if viewing own

		//grabs the userid from the session
		$userid = $_SESSION['userid'];

		$sql = "SELECT * FROM users WHERE userid=:userid";

		$query = $db->prepare( $sql );
		$query->execute( array( ':userid'=>$userid) );
		$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

		foreach( $results as $row ){ 	
			$profilename = $row[ 'username'];
			$realname = $row[ 'realname'];
			$age = $row[ 'age'];
			$sex = $row[ 'sex'];
			$location = $row[ 'location'];
			$genre = $row[ 'genre'];
			$profileimg = $row[ 'profileimg'];
			$aboutme = $row[ 'aboutme'];
			$comment = $row[ 'comment' ];
		}//foreach

	}	

	$userid = $_SESSION['userid'];

		$sql = "SELECT * FROM users WHERE userid=:userid";

		$query = $db->prepare( $sql );
		$query->execute( array( ':userid'=>$userid) );
		$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

		foreach( $results as $row ){ 	
			$username = $row[ 'username'];
		}

	

?>
