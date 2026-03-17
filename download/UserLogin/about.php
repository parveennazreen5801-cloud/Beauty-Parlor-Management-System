<?php
session_start();
require "../includes/connection.php";


// redirect to login if user not logged in
if (!isset($_SESSION['email'])) {
  header("./pmsproject/login.php");
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





    <!--AboutUsImage section start-->

    <section>

        <!-- About Image and Heading -->
        <div class="aboutImageDiv d-flex align-items-center justify-content-center">
            <img src="../assest/images/13.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
            <div class="overlay"></div> <!-- dark overlay -->
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="aboutText">About Us</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="aboutLinkNav">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul
                            class="aboutLink d-flex justify-content-center align-items-center list-unstyled flex-wrap mb-0">
                            <li>
                                <a href="index.php" class="aboutAnchor">
                                    Home <span class="fa fa-angle-right" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!--AboutUsImage section end-->


    <!-------Beauty and success div start---->
    <div class="row m-0 p-0">
        <div class="col-sm-12 twe"></div>
    </div>
    <section>
        <div class="beauty">
            <div class="container">
                <div class="row">

                    <!-- Left spacing -->
                    <div class="col-sm-1 d-none d-sm-block"></div>

                    <!-- Main Content -->
                    <div class="col-sm-10 col-12">
                        <div class="row align-items-start">

                            <!-- Image Column -->
                            <div class="col-lg-6 col-md-12 beauty-image text-center">
                                <img src="../assest/images/b2.jpg" alt="6.jpg" class="img-fluid img-beauty">
                            </div>

                            <!-- Content Column -->
                            <div class="col-lg-6 col-md-12 BeautyHeadingBox">
                                <h3 class="cleanBeauty">Beauty and success starts here</h3><br>

                                <div class="normal">
                                    <ul class="beautyList1 ps-1">
                                        <li>
                                            <h3>Waxing</h3>
                                        </li><br>
                                        <li>
                                            <h3>Hair makeup</h3>
                                        </li><br>
                                        <li>
                                            <h3>Menicure</h3>
                                        </li><br>
                                        <li>
                                            <h3>Hair Cut</h3>
                                        </li>
                                    </ul>

                                    <ul class="beautyList2">
                                        <li>
                                            <h3>Facial</h3>
                                        </li><br>
                                        <li>
                                            <h3>Massage</h3>
                                        </li><br>
                                        <li>
                                            <h3>Pedicure</h3>
                                        </li><br>

                                        <li>
                                            <h3>Body Spa</h3>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Right spacing -->
                    <div class="col-sm-1 d-none d-sm-block"></div>

                </div>
            </div>
        </div>
    </section>

    <div class="row m-0 m-0">
        <div class="col-sm-12 twe"></div>
    </div>
    <!-------Beauty and success div end---->


    <!---About Us Heading div start-->

    <section>
        <div class="aboutMainDiv">
            <div class="container">
                <div class="row">

                    <!-- Left spacing -->
                    <div class="col-sm-1 d-none d-sm-block"></div>

                    <!-- Main Content Column -->
                    <div class="col-sm-10 col-12">
                        <div class="row align-items-center">

                            <!-- Paragraph Column -->
                            <div class="col-lg-6 col-md-12">
                                <div class="about-paragaraph">
                                    <h5 class="AboutHeading">About Us</h5>
                                    <p class="AboutPara ps-1">
                                        Our main focus is on quality and hygiene. Our Parlour is well equipped with
                                        advanced technology equipments
                                        and provides best quality services. Our staff is well trained and experienced,
                                        offering advanced services
                                        in Skin, Hair and Body Shaping that will provide you with a luxurious experience
                                        that leave you feeling
                                        relaxed and stress free. The specialities in the parlour are, apart from regular
                                        bleachings and Facials,
                                        many types of hairstyles, look the Bridal and cine make-up and different types
                                        of Facials & fashion hair
                                        colourings.
                                    </p>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-lg-6 col-md-12 text-center">
                                <div class="AboutImage">
                                    <img src="../assest/images/b3.jpg" alt="b3.jpg" class="img-fluid about-img">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right spacing -->
                    <div class="col-sm-1 d-none d-sm-block"></div>

                </div>
            </div>
        </div>
    </section>
    <div class="row m-0 p-0">
        <div class="col-sm-12 twe"></div>
    </div>


</body>

</html>







<?php

require "../includes/footer.php"
    ?>