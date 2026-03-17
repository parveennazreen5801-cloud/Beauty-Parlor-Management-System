<?php
session_start(); 
require "../includes/connection.php";


// redirect to login if user not logged in
if (!isset($_SESSION['email'])) {
  header("Location: ../login.php");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BPMS</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!---Bootstrap js-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


  <!-- js link--->
  <script src="./assest/js/script.js"></script>

  <!-- CSS Link -->
  <link rel="stylesheet" href="../assest/css/style.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>







<body>

  <header class="header-section">
    <nav class="navbar navbar-expand-lg navbar-info">
      <div class="container-fluid ms-5 gap-5">

        <!-- Logo -->
        <a class="navbar-brand  ms-5 gap-5" href="index.php">BPMS</a>

        <!-- Hamburger Toggle -->
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          ☰
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-5 gap-1">
            <li class="nav-item"><a class="nav-link text-white " href="Home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="book-appoinment.php">Book Salon</a>
            </li>

            <li class="nav-item"><a class="nav-link text-white " href="service.php">Service</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="profile.php">Profile</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="setting.php">Setting</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="../login.php">LogOut</a>
            </li>
          </ul>
          <li class="nav-item ms-5">
            <a class="nav-link text-white ms-5 fs-5" href="#">
              <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>

            </a>
          </li>



        </div>

      </div>
    </nav>
  </header>



  <!--- Slider code start -->

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider">
          <img src="../assest/images/1.jpg" alt="Slider Image" class="slider-img">
          <div class="slider-content d-flex flex-column justify-content-center align-items-start ps-3 ps-lg-5">
            <h4 class="CreativeStyling">Creative Styling</h4>
            <h3 class="BeautySaloon">Beauty Saloon <br> Fashion For Women</h3>
            <a href="login.php" class="btn logo-button mt-2">Get An Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--- Slider code end -->



  <!--- Our Saloon start -->
  <div class="container my-5 mt-5 py-3">
    <div class="row align-items-center m-0 p-0">

      <!-- Left empty space -->
      <div class="col-lg-1 d-none d-lg-block"></div>

      <!-- Text Section -->
      <div class="col-lg-3 col-md-4 col-sm-12 mb-3 d-flex flex-column justify-content-center">
        <div class="offer">
          <h4 class="sal">Our Salon is Most <br>Popular</h4>
          <p class="para ps-1">Eline Hair and Beauty Salon Offers - Beauty Services</p>
          <a href="about.php" class="action-button">Read more</a>
        </div>
      </div>

      <!-- Image 1 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-3 d-flex justify-content-center">
        <div class="lotionImg">
          <img src="../assest/images/5.jpg" alt="5.jpg" class="img-fluid rounded">
        </div>
      </div>

      <!-- Image 2 -->
      <div class="col-lg-4 col-md-6 col-sm-6 mb-3 d-flex justify-content-center">
        <div class="lotionImg1">
          <img src="../assest/images/6.jpg" alt="6.jpg" class="img-fluid rounded">
        </div>
      </div>

      <!-- Right empty space -->
      <div class="col-lg-1 d-none d-lg-block"></div>

    </div>

  </div>



  <!--- Our Saloon end -->




  <!--- relaxation experience start -->
  <div class="relaxation">
    <!-- Image -->
    <img src="../assest/images/3.jpg" alt="Relaxation Image" class="relaxation-img">

    <!-- Grey overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="relaxation">
      <!-- Image -->
      <img src="../assest/images/3.jpg" alt="Relaxation Image" class="relaxation-img">

      <!-- Grey overlay -->
      <div class="overlay"></div>

      <!-- Content -->
      <div class="container h-100 d-flex justify-content-end align-items-start">
        <div class="row w-100 m-0 p-0">
          <div class="col-lg-6 col-md-8 col-sm-12 d-flex flex-column justify-content-center">
            <div class="experience text-start">
              <h4 class="experiencehead">Come experience the secrets of relaxation</h4>
              <p class="experiencepara ps-1">
                Best Beauty expert at your home and provides beauty salon at home. Home Salon provide
                well trained beauty professionals for beauty services at home including Facial, Clean Up, Bleach,
                Waxing, Pedicure, Manicure, etc..
              </p>
              <a href="book-appoinment.php" class="btn logo-button">Get An Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>




  <!--- relaxation experience end -->

  <div class="row m-0 p-0">
    <div class="col-sm-12 twe"></div>
  </div>

  <!---Clean and Recommended Hair Salon start-->

  <section class="clean-section">

    <div class="container">
      <div class="row align-items-center g-4">


        <div class="col-lg-6 col-md-12 text-center">
          <div class="back-image">
            <img src="../assest/images/b1.jpg" alt="Hair Salon" class="img-fluid">
          </div>
        </div>


        <div class="col-lg-6 col-md-12">
          <div class="ImageHeadingBox">
            <h3 class="CleanHeading">
              <a href="about.html">Clean and Recommended Hair Salon</a>
            </h3>
            <p class="CleanPara ps-1">
              Their array of beauty parlour services include haircuts, hair spas, colouring,
              texturing, styling, waxing, pedicures, manicures, threading, body spa, natural facials and more.
            </p>

            <div class="hair-cut row">

              <div class="col-6">
                <ul class="hair list-unstyled">
                  <li><span class="fa fa-check"></span><a href="about.html">Hair cut with Blow dry</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Color & highlights</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Shampoo & Set</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Blow Dry & Curl</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Advance Hair Color</a></li>
                </ul>
              </div>


              <div class="col-6">
                <ul class="hair2 list-unstyled">
                  <li><span class="fa fa-check"></span><a href="about.html">Back Massage</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Hair Treatment</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Face Massage</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Skin Care</a></li>
                  <li><span class="fa fa-check"></span><a href="about.html">Body Therapies</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <div class="row m-0 p-0">
    <div class="col-sm-12 twe"></div>
  </div>



  <?php

  require "../includes/footer.php"
    ?>