<?php 
	if(!empty($_FILES))
	{
		echo "<table border=\"1\">";
		echo "<tr><td>Client Filename: </td><td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
		echo "<tr><td>File Type: </td><td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
		echo "<tr><td>File Size: </td><td>" . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb</td></tr>";
		echo "<tr><td>Name of Temp File: </td><td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
		echo "</table>";
		//grabs the file from the temporary folder and place it in the user-img folder
		// verify the file is a GIF, JPEG, or PNG
		$fileType = exif_imagetype($_FILES["fileToUpload"]["tmp_name"]);
		$allowed = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
		if (!in_array($fileType, $allowed)) {
			echo "Wrong filetype";
		}else{
			
			$filepath = '/applications/MAMP/htdocs/fullsail/FinalProject/TheUnderground/sitepage/images/user-img/';
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filepath.$_FILES["fileToUpload"]["name"]);

		}

		
	}
	if(empty($_FILES))
	{
		echo 'some shit went wrong';
	}

?>

<form action="upload.php" method="POST" enctype="multipart/form-data"> 
 <input type="file" name="fileToUpload">
 <br>
 <input type="submit" value="Upload">
</form>