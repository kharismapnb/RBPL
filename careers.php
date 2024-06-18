<?php
	include 'connect.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $address = $_POST['address'];
    $about = $_POST['about'];
    $cv = $_POST['cv'];
    $suratpernyataan = $_POST['suratpernyataan'];

	$query=mysqli_query($konek, "INSERT INTO worker VALUES ('','$firstname','$lastname','$email','$address','$about','$cv','$suratpernyataan','subbimited','6')") or die(mysqli_error($konek));

	if ($query){
		echo '<script language="javascript">alert("Your job application is submitted!"); document.location="homeworker.php";</script>';
   } else {
   }
	?>

    