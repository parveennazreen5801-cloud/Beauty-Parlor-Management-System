<?php
require "includes/header.php";
?>


<section>

  <!-- About Image and Heading -->
  <div class="aboutImageDiv d-flex align-items-center justify-content-center">
    <img src="./assest/images/b8.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
    <div class="overlay"></div> <!-- dark overlay -->
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="aboutText">Sign Up</h1>
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
            <li class="active">Signup</li>
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

          <!-- Registration Form Column -->
          <div class="col-lg-6 col-md-12">
            <div class="signupDiv ps-1">
              <form method="post" class="regFormDiv">
                <h3 class="RegWithUs mb-3">Register with us!!</h3>

                <!-- First Name -->
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div><br>

                <!-- Last Name -->
                <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <br>
                <!-- Mobile Number -->
                <div class="mb-3">
                  <label class="form-label">Mobile Number</label>
                  <input type="text" name="MobNo" class="form-control" placeholder="Mobile Number" required>
                </div>
                <br> <!-- Address -->
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" name="add" class="form-control" placeholder="Address" required>
                </div>
                <br>
                <!-- Email Address -->
                <div class="mb-3">
                  <label class="form-label">Email Address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <br>
                <!-- Password -->
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div><br>

                <!-- Repeat Password -->
                <div class="mb-3">
                  <label class="form-label">Repeat Password</label>
                  <input type="password" name="Cpassword" class="form-control" placeholder="Repeat Password" required>
                </div>
                <br>
                <!-- Gender -->
                <div class="mb-3">
                  <label class="form-label">Gender</label>
                  <input type="password" name="Gender" class="form-control" placeholder="Gender" required>
                </div>
                
                <br>
                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                  <button type="submit" class="signup1">Signup</button>
                </div>
              </form>
            </div>
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
<?php
require "includes/footer.php";
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mob = $_POST['MobNo'];
  $add = $_POST['add'];
  $gender = $_POST['Gender'];
  $email = $_POST['email'];
 
  $password = $_POST['password'];
  $Cpassword = $_POST['Cpassword'];
  if ($password == $Cpassword) {
    $sql = "INSERT INTO `user`(`FirstName`, `Address`, `Phone`, `Email`, `Password`, `ConerfmPassword`, `Gender`, `LastName`) VALUES ('$fname','$add','$mob','$email','$password', '$Cpassword','$gender','$lname');";
    $res = mysqli_query($con, $sql);
    if ($res) {
      echo "<script> alert('Registration Successfull') </script>";
    }

  } else {
    echo "<script> alert('Sorry ! Password And Confirm Password Mismatched')</script>";
  }
}

?>