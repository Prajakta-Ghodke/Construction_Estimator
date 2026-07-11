<?php
include('conn.php');

	$id=$_GET['id'];

	$querry="Delete from contact where id='$id'";
	$result=mysqli_query($conn,$querry);

header("location: read.php");
exit();
?>