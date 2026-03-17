<?php
session_start();
require "../includes/connection.php";


// redirect to login if user not logged in
if (!isset($_SESSION['email'])) {
  header("Location:../login.php");
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
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <li class="nav-item"><a class="nav-link text-white "
                                href="../login.php">LogOut</a></li>
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


    <section>

        <!-- About Image and Heading -->
        <div class="aboutImageDiv d-flex align-items-center justify-content-center">
            <img src="../assest/images/b8.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
            <div class="overlay"></div> <!-- dark overlay -->
            <div class="container">
                <div class="row m-0 p-0">
                    <div class="col-12 text-center">
                        <h1 class="aboutText">Services</h1>
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
                            <li class="active">Service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="row m-0 p-0">
        <div class="col-sm-12 twe"></div>
    </div>
    <section>
        <div class="row m-0 p-0">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="container galltop">
                    <div class="row g-4 galllef">

                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g1.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">O3 Facial</h5>
                                    <p class="galPara ps-1">
                                        O3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3
                                        FacialO3
                                        FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3 FacialO3
                                        FacialO3 Facial
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>





                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g2.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>






                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g3.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Charcol Facial</h5>
                                    <p class="galPara ps-1">
                                        Activated charcoal is created from bone char, coconut shells, peat, petroleum
                                        coke,
                                        coal, olive pits, bamboo, or sawdust. It is in the form of a fine black dust
                                        that is
                                        produced when regular charcoal is activated by exposing it to very high
                                        temperatures.
                                        This is done to alter its internal structure and increase its surface area to
                                        increase
                                        absorbability. The charcoal that you get after it has undergone this process is
                                        very
                                        porous.
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g5.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g4.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g6.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g7.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g8.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g9.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-4 Gallrow ">
                            <div class="gallery">
                                <img src="../assest/images/g10.png" alt="g1.jpg" class="gallImg1">
                                <div class="gallParaBody">
                                    <hr>
                                    <h5 class="gallTitle">Fruit Facial</h5>
                                    <p class="galPara ps-1">
                                        Fruit facials contain certain fruit acid like glycolic acid, alpha hydroxyl
                                        acid,
                                        citric
                                        acid, phenolic acid, vitamins and minerals in it. These acids are antiblemish,
                                        antiwrinkle and help your skin to exfoliate, it highly detoxifies your skin, it
                                        excretes
                                        out all the toxins and it hydrates your face
                                    </p>
                                    <p class="GallCost">
                                        Cost of Service: $1200
                                    </p>
                                </div>
                            </div>
                        </div>









                        <?php
                        $sql = "SELECT * FROM cart01";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <div class="col-md-4 Gallrow">
                                <div class="gallery">
                                    <img src="../uimg/<?php echo $row['P_img']; ?>" class="gallImg1">
                                    <div class="gallParaBody">
                                        <hr>
                                        <h5 class="gallTitle"><?php echo $row['Title']; ?></h5>
                                        <p class="galPara ps-1">
                                            <?php echo $row['Dis']; ?>
                                        </p>
                                        <p class="GallCost">
                                            Cost of Service: $<?php echo $row['Price']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                    </div>
                </div>
            </div>

            <div class="col-sm-1"></div>
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