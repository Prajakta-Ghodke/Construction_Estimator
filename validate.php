<?php
include_once('conn.php');
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  
	$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn,$query);
    // print_r($result);exit;
	$res = mysqli_num_rows($result);
	if($res == 1)
	{
		$_SESSION['aid']=$res;
	
		header('location:adminpage1.php');
	 }
	 else
	 {
	 	echo "<script type='text/javascript'> alert('Login Failed. Incorrect username or password.');window.location='login.php' </script>";
	 }
	
?>