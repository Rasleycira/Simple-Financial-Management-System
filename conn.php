<?php

	$conn = new mysqli('localhost', 'root', '', 'financial');
	
	if(!$conn){
		die("Error: Can't connect to database");
	}
?>
<?php require_once 'process.php'; ?>