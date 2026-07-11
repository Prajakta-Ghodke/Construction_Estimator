<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<?php
// error_reporting(0);
include('conn.php');

// Turn off all error reporting
error_reporting(0);

 $id=$_GET['id'];
 $querry="select * from contact where id='$id'";

 $result=mysqli_query($conn,$querry) or die('Querry Failed..');
 $row=mysqli_fetch_assoc($result);
 // echo "<pre>";
 // print_r($row); 
 // die();
 
 $id=$row['id'];
?>
				<div class="container"><br>
					<div class="row">
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div></div>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nm" id="nm" placeholder="Your Name" autocomplete="off" value="<?php echo $row['nm']; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="emails" placeholder="Your Email" autocomplete="off" value="<?php echo $row['email']; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subj" id="subject" placeholder="Subject" autocomplete="off" value="<?php echo $row['subj']; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="msg" id="message" placeholder="Message" autocomplete="off" value="<?php echo $row['msg']; ?>"/>
                                    </div>
                                    <div>
                                        <button class="btn btn-success" type="submit" name="submit" value="Update">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>

<?php	
include_once('conn.php');
if(isset($_POST['submit']))
{
	$nm=$_POST['nm'];
	$email=$_POST['email'];
	$subj=$_POST['subj'];
	$msg=$_POST['msg'];
	$querry="UPDATE contact SET nm='$nm',email= '$email',subj= '$subj',msg= '$msg' where id='$id'";

	$result=mysqli_query($conn,$querry);
	 	mysqli_close($conn);
	 	header("location: read.php");
		exit();
 }

?>