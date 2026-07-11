<?php 

	$conn = mysqli_connect("localhost:3307", "root", "", "construction_estimator_db");
	//server_name,username,password,database name Here we connect our project to the database.

	// Check connection
	if (!$conn) 
		{
		// die("Connection failed");
		die("Connection failed: " . mysqli_connect_error());
		//mysqli_connect_error show the database connection error message.
		}
		echo "";
?>