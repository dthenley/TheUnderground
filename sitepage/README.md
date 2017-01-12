TheUnderground
==============

To configure the database make sure the 

connect_to_mysql.php
---------------------
$user = (username of database)
$pass = (password for database)
$db = new PDO(mysqlp:host= (serverhost name); dbname= "the database name")

signup.php
---------------
line 74,137
$filepath = (root directory to where you will like the image stored)

music_upload.php
------------------
line 46
$filepath = (root directory to where to store the music file)

