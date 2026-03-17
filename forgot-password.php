<?php
require "includes/header.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $CurrentPass = $_POST['Currentpass'];
    $NewPass = $_POST['Newpass'];
    $ConPass = $_POST['Conpass'];


    if ($NewPass !== $ConPass) {
        echo "<script>
    alert('New Password and Confirm Password do not match!');
    </script>";
    } else {

        $check_sql = "SELECT * FROM user WHERE Password='$CurrentPass'";
        $check_res = mysqli_query($con, $check_sql);

        if (mysqli_num_rows($check_res) > 0) {
            $update_sql = "UPDATE user 
                   SET Password='$NewPass', ConerfmPassword='$ConPass' 
                   WHERE Password='$CurrentPass'";
            $update_res = mysqli_query($con, $update_sql);

            if ($update_res) {
                echo "<script>alert('Password changed successfully!');</script>";
            } else {
                echo "<script>alert('Error updating password.');</script>";
            }
        } else {
            echo "<script>alert('Current password is incorrect!');</script>";
        }

    }
}
?>

<section>

  <!-- About Image and Heading -->
  <div class="aboutImageDiv d-flex align-items-center justify-content-center">
    <img src="./assest/images/b8.jpg" alt="About Image" class="aboutImg"> <!-- Added image -->
    <div class="overlay"></div> <!-- dark overlay -->
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="aboutText">Forget Password</h1>
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
            <li class="active">Forget Password</li>
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

      <!-- Left Spacing -->
      <div class="col-sm-1 d-none d-sm-block"></div>

      <!-- Main Content -->
      <div class="col-sm-10 col-12">
        <div class="row align-items-start g-4">

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

          <!-- Forget Password Column -->
          <div class="col-lg-6 col-md-12">
            <div class="forgetPassDiv">
              <h3 class="forgetPassDivHea">
                Reset your password and fill below details
              </h3>

              <form method="post" class="forgetForm">
                <div class="mb-3">
                  <input type="text" name="email" placeholder="Enter Your Email" class="form-control" required>
                </div>

                <div class="mb-3">
                  <input type="password" class="form-control" name="Currentpass" placeholder="Current Password"
                    required>
                </div>

                <div class="mb-3">
                  <input type="password" class="form-control" name="Newpass" placeholder="New Password" required>

                </div>

                <div class="mb-3">
                  <input type="password" class="form-control" name="Conpass" placeholder="Conferm Password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <a href="login.php">Sign In</a>
                  <button type="submit" class="reset">Reset</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Spacing -->
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






