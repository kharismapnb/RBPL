<?php
session_start();
// menghubungkan dengan koneksi
$query=new mysqli('localhost', 'root', '', 'bayutama');
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
    <link rel="stylesheet" href="assets/css/careers.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <h1>CBT</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <li class="scroll-to-section"><a href="index.php">Home</a></li>
                        <li class="scroll-to-section"><a href="index.php #services">Services</a></li>
                        <li class="scroll-to-section"><a href="index.php #aboutus">About Us</a></li>
                        <li class="scroll-to-section"><a href="index.php #team">Team</a></li>
                        <li class="scroll-to-section"><a href="index.php #cllients">Our Clients</a></li>
                        <li class="scroll-to-section"><a href="index.php #testimonials">Contact us!</a></li>
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
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h2>Before gaining access to this page,<BR>please log in to your account.</h2>
            <p>Kindly provide your login credentials to proceed further and access the desired information.</p>
            <br>
          </div>
        </div>
      </div>
    </div>

          <?php
    if (isset($_GET['alert'])) {
      if ($_GET['alert'] == "failed") {
        echo '<script> alert("We are sorry, but we couldnt log you in. Please double-check your username and password and try again");</script';
      } elseif ($_GET['alert'] == "logout") {
        echo '<script> alert("Logout success")</script>';
      } elseif ($_GET['alert'] == "not_logged_in") {
        echo '<script> alert("Oops! It seems like youre trying to access restricted content. Please log in to your account to view this page.")</script>';
      }
    }
    ?>
  </div>
  <div class="container" style="padding-right: 550px">
    <form action="afterlogin.php" method="POST">
      <div>
        <div>
            <label for="validationDefault01">Username/ Email</label>
            <input type="text" class="form-control" name="username" value="" required>
        </div>
        <div>
          <label for="validationDefault02">Password</label>
          <input type="password" class="form-control" name="password" value="" required>
        </div><br>
        <button class="btn btn-primary" type="submit">Login</button>
      </div>
    </form> <br>
    <div>
      <p>Don't have an account yet?<a href="regis.php"> Register Here!</a></p>
    </div>
  </div>
  
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