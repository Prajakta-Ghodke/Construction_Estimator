<?php 	
	include_once('conn.php');

	if(isset($_POST['submit']))
	{
		$nm=$_POST['nm'];
		$email=$_POST['email'];
		$subj=$_POST['subj'];
		$msg=$_POST['msg'];
	
	 $querry ="INSERT INTO contact (nm,email,subj,msg)values('{$nm}','{$email}','{$subj}','{$msg}')";

	$result=mysqli_query($conn,$querry);

	mysqli_close($conn);
	}
header("location: read.php");
exit();
?>