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
          <h1 class="aboutText">Contact Us</h1>
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
            <li class="active">Contact</li>
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

          <!-- Form Column -->
          <div class="col-lg-6 col-md-12">
            <div class="form-container">
              <form method="post" class="">
                <div class="name-row">
                  <input type="text" name="fname" placeholder="First Name" class="form-control mb-3 w-100" required>
                  <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
                </div>

                <div class="name-row1">
                  <input type="text" name="phone" placeholder="Phone" class="form-control mb-3 w-100" pattern="[0-9]+"
                    maxlength="10" required>
                  <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>

                <textarea name="message" placeholder="Message" class="form-control message" required></textarea>

                <div class="d-flex justify-content-end mt-3">
                  <button type="submit" class="btn-primary">Send Message</button>
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
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['Message'];
$sql="INSERT INTO `contact` (`FirstName`, `LastName`, `Phone`, `Email`, `Message`) VALUES ('$fname', '$lname', '$phone', '$email', '$message');";
$res=mysqli_query($con,$sql);
if($res){
     echo"<script>alert('Your message was sent successfully!.')</script>";
}
}
?>