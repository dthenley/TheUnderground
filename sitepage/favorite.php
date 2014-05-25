<?php
	
	session_start();

	print_r($_SESSION['userid']);

	$userid = $_SESSION['userid'];

	$sql = "SELECT * FROM users WHERE userid=:userid";

	$query = $db->prepare( $sql );
	$query->execute( array( ':userid'=>$userid) );
	$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

	foreach( $results as $row ){ 	
		$favoriteList = $row[ 'favoriteList'];
		
	}//foreach end

	//take the the session user and put the favorite variable in a variable
	$profileid = $_SESSION['profileid'];

	$sql = "SELECT * FROM users WHERE userid=:userid";

	$query = $db->prepare( $sql );
	$query->execute( array( ':userid'=>$profileid) );
	$results = $query->fetchAll( PDO::FETCH_ASSOC ); 

	foreach( $results as $row ){ 	
		$profileName = $row[ 'username'];
		$profileid = $row['userid'];
	}//foreach end

	//takes the get page username and link and store it in a variable <a href="profile.com?username=6">Username</a>
	$favoriteList = '<li><a href="profile.php?userid='.$profileid.'">'.$profileName.'</a></li>';

	//add the username to the favorite variable
	$query = $db->prepare("
			UPDATE users 
			SET 
				 favoriteList = '".$favoriteList."'
			WHERE userid=".$proifleid
			);

		try{
			$query->execute();
			//print_r($query);
		} catch(PDOException $e){
		echo 'error'.$e->getMessage;
		}


	

	

?>