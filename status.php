<?php
session_start(); if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>PT Cahaya Bayu Tama</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="homeworker.php" class="logo">
                        <h1>CBT</h1>
                    </a>
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="homeworker.php">Home</a></li>
                      <li class="scroll-to-section"><a href="logout.php">Log Out</a></li>
                  </ul> 
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">

          <div class="section-heading" style="margin-top: 70px">
            <h2>Here is the status of your job application</h2>
            <br>
          </div>

    <div >
        <table class="container-sm table table-bordered border border-5 border-black">
            <tr class="fw-bold">
                <td >No</td>
                <td >First Name</td>
                <td >Last Name</td>
                <td >Email</td>
                <td >Address</td>
                <td >CV</td>
                <td >Statement Letter</td>
                <td>Status</td>
            </tr>
            <?php 
                include 'connect.php';
                $query = mysqli_query($konek, "SELECT * FROM worker WHERE `worker`.`id_acc` = 6");
                $no = 1;
                while ($data=mysqli_fetch_array($query))
            { ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data['firstname'];?></td>
                <td><?php echo $data['lastname'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['address'];?></td>
                <td><?php echo "<a href='unduh.php?id=" . $data['id'] . "'>" . $data['cv'] . "</a>";?></td>
                <td><?php echo "<a href='download.php?id=" . $data['id'] . "'>" . $data['suratpernyataan'] . "</a>";?></td>
                <td>
                  <?php
                    if (isset($_SESSION['status'])) {
                        $status = $_SESSION['status'];
                        echo $status;
                    } else {
                        echo "Status belum tersedia.";
                    }
                  ?>
                </td>
            </tr>
            <?php $no++;}
            ?>
        </table>
        <p>
          *Please check your email frequently when your application status is <strong>‘under review’</strong> to see the interview schedule that has been sent.
        </p>
    </div>
      </div>
    </div>
        </div></div></div></div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 PT Cahaya Bayu Tama. All rights reserved.&nbsp;&nbsp;&nbsp;
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>