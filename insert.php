<?php 
include 'conn.php';

if(isset($_REQUEST['submit'])){

    $nm = $_REQUEST['nm'];
    // print_r($nm);exit;
    $email = $_REQUEST['email'];
    $subj = $_REQUEST['subj'];
    $msg = $_REQUEST['msg'];
    
    $sql = "INSERT INTO contact (nm,email,subj,msg) VALUES ('$nm','$email','$subj','$msg')";
    // print_r($sql);exit;
    if(mysqli_query($conn, $sql)) {
        echo '<span style="font-size: 55px; color: blue;"> ' ."Thank you for contacting us! We will reach to you soon.".  '</span>';
		header("Location: read1.php");  
		exit();
    } else {
        echo "Unable to Insert Data";
    }
  }


 ?>