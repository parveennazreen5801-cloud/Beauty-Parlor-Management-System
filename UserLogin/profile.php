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
    <script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
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





  <section>

    <!-- About Image and Heading -->
    <div class="aboutImageDiv d-flex align-items-center justify-content-center">
      <img src="../assest/images/b8.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
      <div class="overlay"></div> <!-- dark overlay -->
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="aboutText">Profile</h1>
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
              <li class="active">Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div class="row m-0 p-0">
    <div class="col-sm-12 twe"></div>
  </div>
  <section class="contact-section">
    <div class="container">
      <div class="row justify-content-center">

        <!-- Left spacing -->
        <div class="col-sm-1 d-none d-sm-block"></div>

        <!-- Main content -->
        <div class="col-sm-10 col-12">
          <div class="row g-4">

            <!-- Contact Info Column -->
            <div class="col-lg-6 col-md-12">
              <div class="contactInfo">
                <div class="contactItem">
                  <i class="fa fa-phone"></i>
                  <div>
                    <h6 class="contactHeading">Call Us</h6>
                    <a href="tel:+919999999999">+91 9999999999</a>
                  </div>
                </div>
                <div class="contactItem">
                  <i class="fa fa-envelope"></i>
                  <div>
                    <h6 class="contactHeading">Email Us</h6>
                    <a href="mailto:demo@gmail.com">demo@gmail.com</a>
                  </div>
                </div>
                <div class="contactItem">
                  <i class="fa fa-map-marker-alt"></i>
                  <div>
                    <h6 class="contactHeading">Address</h6>
                    <p>890, Sector 62, Gyan Sarovar, GAIL Noida (Delhi/NCR)</p>
                  </div>
                </div>
                <div class="contactItem">
                  <i class="fa fa-clock"></i>
                  <div>
                    <h6 class="contactHeading">Time</h6>
                    <p>Mon - Sat: 10:00 AM - 7:00 PM</p>
                  </div>

                </div>
              </div>

            </div>
            <div class="col-lg-6">
              <form method="post"> <input type="text" name="ID" class="form-control">
                <button name="sig" class="login mt-3 mb-3">Find</button>
              </form>

              <?php

              if (isset($_POST['sig'])) {
                $id = $_POST['ID'];
                $sql = "SELECT * FROM user WHERE ID=$id";
                $res = mysqli_query($con, $sql);
                $num = mysqli_num_rows($res);
                
                if ($num > 0) {
                  while ($row = mysqli_fetch_assoc($res)) {


                    ?>
                    <!-- Registration Form Column -->
                    <div>
                      <div class="signupDiv ps-1">
                        <form method="post" class="regFormDiv">
                          <h3 class="RegWithUs mb-3">User Profile!!</h3>

                          <div class="mb-3">
                            <label class="form-label">Id</label>
                            <input type="text" name="ID" class="form-control" placeholder="" required
                              value="<?php echo $row['ID'] ?>">
                          </div><br>

                          <!-- First Name -->
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="First Name" required
                              value="<?php echo $row['FirstName'] ?>">
                          </div><br>

                          <!-- Last Name -->
                          <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required
                              value="<?php echo $row['LastName'] ?>">
                          </div>
                          <br>
                          <!-- Mobile Number -->
                          <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="text" name="MobNo" class="form-control" placeholder="Mobile Number" required
                              value="<?php echo $row['Phone'] ?>">
                          </div>

                          <br>
                          <!-- Email Address -->
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required
                              value="<?php echo $row['Email'] ?>">
                          </div>
                          <br>
                          <!-- Password -->



                          <br>
                          <!-- Submit Button -->
                          <div class="d-flex justify-content-end">
                            <button type="submit" name="signup1" class="login">save change</button>
                          </div>
                        </form>
                      </div>
                    </div>

                    <?php
                  }
                }

              }
              ?>
              <?php
              if (isset($_POST['signup1'])) {
                $id = $_POST['ID'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $MobNo = $_POST['MobNo'];
                $email = $_POST['email'];
                 $sql = "UPDATE user 
                  SET FirstName='$fname', LastName='$lname', Phone='$MobNo', Email='$email'
                  WHERE ID=$id";
                $res = mysqli_query($con, $sql);
                if ($res) {
                  echo "<script>alert('Data Updated Successfully')</script>";
                }
                 else {
            echo "<p class='text-danger mt-3'>Update failed!</p>";
          }
              }

              ?>
            </div>
          </div>
        </div>
        <!-- Right spacing -->
        <div class="col-sm-1 d-none d-sm-block"></div>

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