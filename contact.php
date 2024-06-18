<?php
	include 'connect.php';

	$fullname = $_POST['name'];
	$companyname = $_POST['companyname'];
	$email = $_POST['email'];
    $message = $_POST['message'];

	$query=mysqli_query($konek, "INSERT INTO client VALUES ('$fullname','$companyname','$email', '$message','')") or die(mysqli_error($konek));

	if ($query){
		echo '<script language="javascript">alert("Message sent!"); document.location="index.php";</script>';
   } else {
		echo '<script language="javascript">alert("failed to send the message!"); document.location="index.php";</script>';
   }
	?>

    