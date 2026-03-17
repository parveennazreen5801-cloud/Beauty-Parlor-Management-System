<?php
require "./includes/connection.php";
?>
<style>
    .txt {
        text-decoration: none;
        color: white;
    }

    .dv {
        height: 14px;
        width: 14px;
        background-color: red;
        border-radius: 50%;
        color: white;
        font-size: 10px;
        font-weight: bold;
        margin-left: 8px;

    }

    .list {
        list-style: none;
    }
</style>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assest/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="top-navbar d-flex align-items-center justify-content-between p-2 bg-light shadow-sm">
        <div class="d-flex align-items-center">
            <i class="fa fa-bars text-dark fs-4 toggle-btn me-3" id="toggle-btn" style="cursor:pointer;"></i>
            <div class="panel-title text-white text-center fw-bold">
                <small class="text-center">BPMS <br> Admin Panel</small>
            </div>
        </div>

        <div class="d-flex align-items-center">
            <!-- Notification Bell -->
            <div class="dropdown me-3 text-center">
                <?php
                $sql = "SELECT * FROM  appoinment";
                $res = mysqli_query($con, $sql);
                $num = mysqli_num_rows($res);
                echo "<div class='dv'><span class='data'>$num</span></div>"
                    ?>
                <i class="fa fa-bell text-dark fs-5" id="notificationBell" data-bs-toggle="dropdown"
                    style="cursor:pointer;">

                </i>
                <ul class="dropdown-menu dropdown-menu-end mt-2 p-2 shadow-sm" aria-labelledby="notificationBell">
                    <li class="px-3 text-muted small">You have
                        <?php $sql = "SELECT * FROM  appoinment";
                        $res = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($res);
                        echo "$num"
                            ?> notificaton
                    </li>
                    <li>
                        <hr class="dropdown-divider">

                    </li>

                    <li style='text-size:1px'>

                        <?php
                        $sql = "SELECT * FROM  appoinment";
                        $res = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($res);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                echo "<ol class='list'>
                  <span style='color:blue;font-size:10px'> New appointment received from<li>" . $row['Name'] . "</li></span>
                <span style='color:blue;font-size:10px'><li>" . $row['AppNumber'] . "</li></span>
              
                </ol>";
                                echo "<hr>";
                            }
                        }

                        ?>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="text-center">
                        <a href="#dashboard-section" class="see-all text-primary text-decoration-none small">See all
                            notifications</a>
                    </li>
                </ul>
            </div>

            <!-- Admin Dropdown -->
           
      <!-- Admin Dropdown -->
       <div class="dropdown d-flex align-items-center">
      <?php
      $username = $_SESSION['Name'];
      $query = mysqli_query($con, "SELECT * FROM admin WHERE Username='$username'");
      $admin = mysqli_fetch_assoc($query);
      $photo = $admin['Photo'] ? 'upload/' . $admin['Photo'] : 'upload/default.png';
      ?>
      <img src="<?= $photo ?>" alt="Admin Photo" class="rounded-circle me-2" height="45" width="45">
      
          <div class="text-dark small">
            <div class="fw-bold"
              style="color:#DD6777; font-size:16px; font-weight:700; font-family:'Roboto Condensed',sans-serif; ">
              <?php echo $_SESSION['Name']; ?>
            </div>
            <div
              style="color:#424F63; font-size:12px; font-weight:400; font-size:16px;font-weight:700; font-family:'Roboto Condensed',sans-serif;">
              Administrator </div>
          </div>
        </div>
                <i class="fa fa-chevron-down text-dark ms-2" id="adminDropdownIcon" data-bs-toggle="dropdown"
                    style="cursor:pointer;"></i>
                <ul class="dropdown-menu dropdown-menu-end mt-2">
                    <li><a class="dropdown-item" href="change-Adminpassword.php"><i class="fa fa-gear me-2 text-primary"></i>Settings</a></li>
                    <li><a class="dropdown-item" href="dasprofile.php"><i class="fa fa-user me-2 text-primary"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="admin.php"><i
                                class="fa fa-sign-out-alt me-2 text-primary"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Wrapper -->
    <div class="page-wrapper d-flex" style="min-height:100vh;">


        <!-- Sidebar -->
        <div class="sidebar bg-light p-3" id="sidebar" style="width:250px;">
            <ul class="nav flex-column px-2 mt-5 gap-4">
                <li class="nav-item"> <a href="dashboard.php" class="nav-link"><i
                            class="fa fa-home me-2"></i>Dashboard</a> </li>
                <li class="nav-item"> <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                        <span><i class="fa fa-briefcase me-2"></i>Services</span> <i class="fa fa-angle-left"></i> </a>
                    <ul class="submenu">
                        <li><a href="add-Service.php">Add Service</a></li>
              <li><a href="servicetable.php"> All Services</a></li>
                        <li><a href="rejectservice.php"> Reject Services</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fa fa-calendar-check me-2"></i>
                            Appointment</span>
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="all-Appointment.php">All Appointment</a></li>

                        <li><a href="accept-Appointment.php">Accept Appointment</a></li>
                        <li><a href="reject-Appointment.php">Reject Appointment</a></li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                        <span><i class="fa fa-calendar-check me-2"></i>Enquiry</span> <i class="fa fa-angle-left"></i>
                    </a>
                    <ul class="submenu">
                        <li><a href="read-Enquiry.php">Read Enquiry</a></li>
                        <li><a href="unread-Enquiry.php">Unread Enquiry</a></li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="customer-List.php" class="nav-link"><i
                            class="fa fa-users me-2"></i>Customer
                        List</a> </li>


            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-5 p-3" id="main-content">
            <div class="container-fluid" id="cards-container">
                <div class="row m-0 p-0 mt-5">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 mt-5 bg-dark text-light">
                        <u>
                            <h1 class="text-center fw-bold ">Reject Appointment</h1>
                        </u>
                        <table class="table border table-hover table-dark">
                            <tr>
                                <th>Appointment Number</th>
                                <th>Name</th>
                                <th>Mobile Number</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                                <th>User Image</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM reject_appointment ORDER BY AppDate DESC";
                            $res = mysqli_query($con, $sql);

                            if (mysqli_num_rows($res) > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<tr>
                    <td>{$row['AppNumber']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Mo_Number']}</td>
                    <td>{$row['AppDate']}</td>
                    <td>{$row['AppTime']}</td>
                    <td><img height='50px' src='./UserLogin/uimg/{$row['User_img']}'></td>
                    <td>{$row['Status']}</td>
                </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='7' class='text-center'>No Rejected Appointments</td></tr>";
                            }
                            ?>



                        </table>
                    </div>
                    <div class="col-sm-2"></div>
                </div>





            </div>
        </div>




    </div>
    </div>
    </div>
    </div>

    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("main-content");
        const toggleBtn = document.getElementById("toggle-btn");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("active");
            mainContent.classList.toggle("shifted");
        });

        // Sidebar submenu toggle
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach((item) => {
            const arrow = item.querySelector('.fa-angle-left');
            const submenu = item.querySelector('.submenu');
            if (arrow && submenu) {
                arrow.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    document.querySelectorAll('.submenu').forEach(s => {
                        if (s !== submenu) s.classList.remove('submenu-open');
                    });
                    document.querySelectorAll('.fa-angle-left').forEach(icon => {
                        if (icon !== arrow) icon.classList.remove('rotate');
                    });
                    submenu.classList.toggle('submenu-open');
                    arrow.classList.toggle('rotate');
                });
            }
        });
    </script>
</body>

</html>