<?php
require "connection.php";
?>
<?php
if(isset($_POST['send_enquiry'])){
  $name=$_POST['name'];
  $date=$_POST['date'];
  $email=$_POST['email'];
  $sql="INSERT INTO `enquiry` (`Name`, `Email`, `Date`) VALUES ('$name', '$email', '$date');";
  $res=mysqli_query($con,$sql);

}



?>

<html lang="en">

<head>
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
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

 <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>

  </head>

<body>

<header class="header-section">
  <nav class="navbar navbar-expand-lg navbar-info">
    <div class="container-fluid ms-5 gap-5">

      <!-- Logo -->
      <a class="navbar-brand  ms-5 gap-5" href="index.php">BPMS</a>

      <!-- Hamburger Toggle -->
      <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        ☰
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-5 gap-1">
          <li class="nav-item"><a class="nav-link text-white ms-5" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="contact.php">Contact</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="./service.php">Service</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="admin.php">Admin</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="signup.php">Signup</a></li>
          <li class="nav-item"><a class="nav-link text-white ms-4" href="login.php">Login</a></li>
        </ul>
      </div>
   <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:white;background-color:#5ACAE3;border:1px solid white">
Enquiry
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center " id="exampleModalLabel">Enquiry Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <label >Name</label>
          <input type="text" name="name" id="txt" class="form-control">
          <label >Date</label>
          <input type="date" name="date" id="txt1" class="form-control">
          <label for="">Email</label>
          <input type="email" name="email" id="txt2" class="form-control">
       <button type="submit" class="btn btn-danger w-100 mt-3" name="send_enquiry" onclick="send()">Send Enquiry</button>

        </form>
      </div>
     
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-1"></div>
   </div>
    </div>
 
  </nav>
</header>


   