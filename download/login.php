<?php
session_start();
require "includes/header.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$password'";
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        
        $_SESSION['email'] = $row['Email'];
       $_SESSION['name'] = $row['FirstName'] . ' ' . $row['LastName']; 

        
        header("Location: ./UserLogin/Home.php");
        exit;
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
     
    $email=$_POST['email'];
    $password=$_POST['password'];
     $sql="SELECT * FROM  user  WHERE Email='$email' AND Password='$password'";
     $res=mysqli_query($con,$sql);
    $num=mysqli_num_rows($res);
     if($num>0){
     echo $num;
        exit;
    }
    else{
      echo"<script>alert('Invalid Email and Password')</script>";
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
          <h1 class="aboutText">Login</h1>
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
            <li class="active">login</li>
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
   <div class="col-lg-6 col-md-12">
        <div class="logindiv">
          <form method="post" class="loginForm">
            <input type="text" name="email" class="form-control" placeholder="Registered Email or Contact" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <a href="forgot-password.php">Forgot Password?</a>
            <button type="submit" class="login">Login</button>
          </form>
        </div>
      </div>
               
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</section>



<div class="row m-0 p-0">
  <div class="col-sm-12 twe"></div>
</div>




<?php
require "includes/footer.php";
?>