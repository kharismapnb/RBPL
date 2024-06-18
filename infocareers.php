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
    <link rel="stylesheet" href="assets/css/infocareers.css">
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
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
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
            <div class="item item-3">
              <div class="header-text">
                <span class="category">let's join us!</span>
                <h2>What Do You Gain From Joining Us?</h2>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Career Development Opportunities.</p>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Work-Life Balance.</p>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Competitive Compensation and Benefits.</p>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Positive Work Culture.</p>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Social Events and Team-Building Activities.</p>
                <p> <code style="color: aliceblue;">&#10004</code>&nbsp;&nbsp;  Leadership and Mentorship Programs.</p>

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
            <h6>Driver</h6>
            <h2>Join Our Team as a Professional Driver!</h2>
            <p>Do you have a passion for driving and delivering excellent service to customers?</p>
            <p>If so, we invite you to join our team as a Professional Driver!</p>
            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <div class="item" style="color: aliceblue;">
              <h7><strong>Requirements : </strong></h7>
              <ol>
                <li>1. Minimum age of 21 years.</li>
                <li>2. High school diploma or equivalent.</li>
                <li>3. Valid driver's license (Class A or Class B).</li>
                <li>4. Minimum of 2 years of driving experience (preferably with commercial vehicles).</li>
                <li>5. Good physical health and free from drug and alcohol use.</li>
                <li>6. Clean criminal record (SKCK required).</li>
             </ol>
             <br> <hr> <br>
              <center>If you meet the above requirements and are interested in joining us, please
              <div class="main-button" style="margin-top: 15px;">
                <a href="homeworker.php">Apply Now!</a></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item" style="color: aliceblue;">
              <h7><strong>Requirements : </strong></h7>
              <ol>
                <li>1. Minimum age of 18 years.</li>
                <li>2. High school diploma or equivalent.</li>
                <li>3. Prior experience in cleaning services is a plus but not required.</li>
                <li>4. Attention to detail and a commitment to maintaining high standards of cleanliness.</li>
                <li>5. Good physical health and free from drug and alcohol use.</li>
                <li>6. Clean criminal record (SKCK required).</li>
                <li>7. Ability to work independently and as part of a team.</li>
             </ol>
             <br> <hr> <br>
              <center>If you meet the above requirements and are interested in joining us, please
              <div class="main-button" style="margin-top: 15px;">
                <a href="homeworker.php">Apply Now!</a></center>
              </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Cleaning Service</h6>
            <h2>Join Our Team as a Professional Cleaning Service!</h2>
            <p>Are you passionate about maintaining cleanliness and providing excellent service?</p>
            <p>If yes, we invite you to join our team as a Professional Cleaning Service! </p>
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
            <h6>Security</h6>
            <h2>Join Our Team as a Professional Security Officer!</h2>
            <p>Are you committed to ensuring safety and security? Do you have a keen eye for detail and a passion for protecting others? </p>
            <p>If so, we invite you to join our team as a Professional Security Officer!</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <div class="item" style="color: aliceblue;">
              <h7><strong>Requirements : </strong></h7>
              <ol>
                <li>1. Minimum age of 21 years.</li>
                <li>2. High school diploma or equivalent.</li>
                <li>3. Valid security guard license.</li>
                <li>4. Previous experience in security or law enforcement is a plus.</li>
                <li>5. Good physical condition and the ability to stand for long periods.</li>
                <li>6. Clean criminal record (SKCK required).</li>
                <li>7. Strong observational and problem-solving skills.</li>
                <li>8. Excellent communication skills and the ability to work independently and as part of a team.</li>
             </ol>
             <br> <hr> <br>
              <center>If you meet the above requirements and are interested in joining us, please
              <div class="main-button" style="margin-top: 15px;">
                <a href="homeworker.php">Apply Now!</a></center>
              </div>
          </div>
        </div>
      </div>
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