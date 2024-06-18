<?php
session_start();
// menghubungkan dengan koneksi
$query=new mysqli('localhost', 'root', '', 'bayutama');

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
if($data = mysqli_query($query,"SELECT * FROM admin WHERE username='$username' and password='$password'")or die (mysqli_error($query))){

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
$_SESSION['username'] = $username;
$_SESSION['status']	= "subbmited"; header("location:homeadmin.php");
}else{
    if($data = mysqli_query($query,"SELECT * FROM accworker WHERE username='$username' and password='$password'")or die (mysqli_error($query))){

        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);
        
        if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status']	= "subbmited"; header("location:homeworker.php");
        }else{
        header("location:admin.php?alert=failed");
        } 
    }
}}
?>