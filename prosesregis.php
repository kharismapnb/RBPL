<?php
        include 'connect.php';

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($konek, "INSERT INTO accworker VALUES ('','$username','$password')") or die(mysqli_error($konek));

        if ($query){
            echo '<script language="javascript">alert("Register Succeed!"); document.location="admin.php";</script>';
       } else {
            echo '<script language="javascript">alert("Register Failed!"); document.location="regis.php";</script>';
       }
        ?>