<?php
require "includes/connection.php"
  ?>


<?php

session_start();
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

  <!-- CSS Link -->
  <link rel="stylesheet" href="assest/css/style.css">
  <!-- js link--->
  <script src="assest/js/script.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style=" background-color: #F1F1F1;">
    <script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
  <section class="sec justify-content-start">
    <div class="row m-0 p-0">
      <div class="col-sm-12">
        <div class="row m-0 p-0">
          <div class="col-sm-2 d-none d-sm-block"></div>
          <div class="col-sm-8">
            <div class="AdminSigHea" style=" background-color: #F1F1F1;">
              <h6 class="SignHeading">SignIn Page</h1>
            </div>
            <div class="adminBody">

              <h4 class="welcome">Welcome back to BPMS AdminPanel !</h4>
              <hr>
              <div class="signInForm">
                <div class="formS">
                  <form method="post">
                    <input type="text" name="Username" placeholder="Username" class="form-control" required><br>
                    <input type="password" name="Password" placeholder="Password" class="form-control" required>
                    <input type="submit" class="btn w-100 mt-3" value="Sign In">
                    <a href="index.php" class="backToHome mt-2">Back to Home</a><br>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2  d-none d-sm-block"></div>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['Username'];
$password=$_POST['Password'];



       $sql="SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
       $res=mysqli_query($con,$sql);
       $num=mysqli_num_rows($res);
       if($num){
        header ("location:dashboard.php");
        
                 $_SESSION['Name']=$username;
                 
       }
       else
       {
        echo "<script>alert('User Id Or Password is incorrect')</script>";
       }
 

}


?>