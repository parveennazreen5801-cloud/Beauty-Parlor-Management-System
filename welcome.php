<?php
require "includes/connection.php";

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
  <link rel="stylesheet" href="./assest/css/style.css">


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
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/Home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/about.php">About</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/book-appoinment.php">Book Salon</a>
            </li>

            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/service.php">Service</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="./UserLogin/profile.php">Profile</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/setting.php">Setting</a></li>
            <li class="nav-item"><a class="nav-link text-white " href="./UserLogin/login.php">LogOut</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>




  <section>

    <!-- About Image and Heading -->
    <div class="aboutImageDiv d-flex align-items-center justify-content-center">
      <img src="./assest/images/b8.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
      <div class="overlay"></div> <!-- dark overlay -->
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="aboutText">Appointment Confirmation</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="aboutLinkNav">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="aboutLink d-flex justify-content-center align-items-center list-unstyled flex-wrap mb-0">
              <li>
                <a href="index.php" class="aboutAnchor">
                  Home <span class="fa fa-angle-right" aria-hidden="true"></span>
                </a>
              </li>
              <li class="active">Thank You</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
 

 <div class="row m-0 p-0">
    <div class="col-sm-12 twe"></div>
  </div>

<h4 class="text-center" style="font-size:24px;font-weight:500;font-family:'Josefin Slab',serif;color:#212529">Thank you for applying. Your Appointment no is   <?php $sql = "SELECT * FROM  appoinment";
          $res = mysqli_query($con, $sql);
          $num = mysqli_num_rows($res);
          echo "$num"
            ?></h4>

  <div class="row m-0 p-0">
    <div class="col-sm-12 twe"></div>
  </div>




</body>

</html>

<?php

require "./includes/footer.php"
  ?>