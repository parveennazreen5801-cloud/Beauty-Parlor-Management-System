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

    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        overflow-y: hidden;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: auto;
    }

    table th,
    table td {
        white-space: nowrap;
        text-align: center;
    }

    .main-content {
        flex-grow: 1;
        overflow-x: hidden;
        transition: transform 0.3s ease;
    }



    .page-wrapper {

        width: 100%;
        overflow-x: hidden;
    }
</style>
<?php
session_start();
?>
<?php
if (isset($_POST['update'])) {
    $sNo = $_POST['sNo'];
    $Dis = mysqli_real_escape_string($con, $_POST['Dis']);
    $Price = mysqli_real_escape_string($con, $_POST['Price']);
    $Title = mysqli_real_escape_string($con, $_POST['Title']);

    // Image handling (optional)
    if (isset($_FILES['P_img']) && $_FILES['P_img']['name'] != "") {
        $imgName = $_FILES['P_img']['name'];
        $tmpName = $_FILES['P_img']['tmp_name'];
        $target = "../uimg/" . $imgName;
        move_uploaded_file($tmpName, $target);
        $imgSql = ", P_img='$imgName'";
    } else {
        $imgSql = "";
    }

    $sqlUpdate = "UPDATE cart01 SET Dis='$Dis', Price='$Price', Title='$Title' $imgSql WHERE sNo='$sNo'";
    $resUpdate = mysqli_query($con, $sqlUpdate);

    if ($resUpdate) {
        echo "<script>
            alert('Service updated successfully!');
            window.location.href='servicetable.php';
        </script>";
    } else {
        echo "<script>alert('Error updating service!');</script>";
    }
}
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
    <link rel="stylesheet" href="assest/css/style.css">
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
                <li><a class="dropdown-item" href="change-Adminpassword.php"><i
                            class="fa fa-gear me-2 text-primary"></i>Settings</a></li>
                <li><a class="dropdown-item" href="dasprofile.php"><i
                            class="fa fa-user me-2 text-primary"></i>Profile</a></li>
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
        <div class="main-content flex-grow-1 p-3" id="main-content">
            <div class="container-fluid" id="cards-container">
                <div class="row mt-5">

                    <div class="col-lg-12 mt-5 bg-dark text-light">
                        <div class="table-responsive">
                            <table class="table border table-hover table-dark">
                                <u>
                                    <h1 class="text-center fw-bold ">All Service Table</h1>
                                </u>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Dis</th>
                                    <th>Price</th>
                                    <th>P_img</th>
                                    <th>Title</th>

                                    <th>Actions</th>
                                </tr>
                                <?php
                                $sql = "SELECT * FROM  cart01";
                                $res = mysqli_query($con, $sql);
                                $num = mysqli_num_rows($res);
                                if ($num > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {

                                        echo '<tr>
            <td>' . $row["sNo"] . '</td>
            <td>' . $row["Dis"] . '</td>
            <td>' . $row["Price"] . '</td>
            <td><img height="50px" src="../uimg/' . $row["P_img"] . '"></td>
            <td>' . $row["Title"] . '</td>
            <td>
                <form method="POST" class="d-flex gap-2">
                    <input type="hidden" name="sNo" value="' . $row["sNo"] . '">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal' . $row["sNo"] . '">Update</button>
                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>';


                                        ?>
                                        <div class="modal fade" id="updateModal<?php echo $row['sNo']; ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel<?php echo $row['sNo']; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-dark text-white">
                                                        <h5 class="modal-title"
                                                            id="exampleModalLabel<?php echo $row['sNo']; ?>">Update Service</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="sNo" value="<?php echo $row['sNo']; ?>">
                                                            <div class="mb-3">
                                                                <label class="form-label text-dark fw-bold">Discription</label>
                                                                <input type="text" name="Dis" value="<?php echo $row['Dis']; ?>"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label text-dark fw-bold">Price</label>
                                                                <input type="text" name="Price"
                                                                    value="<?php echo $row['Price']; ?>" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label text-dark fw-bold">Title</label>
                                                                <input type="text" name="Title"
                                                                    value="<?php echo $row['Title']; ?>" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label text-dark fw-bold">Image</label>
                                                                <input type="file" name="P_img" class="form-control">
                                                                <small>Current: <?php echo $row['P_img']; ?></small>
                                                            </div>
                                                            <div class="text-center">
                                                                <button type="submit" name="update"
                                                                    class="btn btn-success w-100">Save Changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>

                                <?php
                                if (isset($_POST['delete'])) {
                                    $serial = $_POST['sNo'];


                                    $select = "SELECT * FROM cart01 WHERE sNo='$serial'";
                                    $resSelect = mysqli_query($con, $select);
                                    $row = mysqli_fetch_assoc($resSelect);

                                    if ($row) {

                                        $Dis = mysqli_real_escape_string($con, $row['Dis']);
                                        $Price = mysqli_real_escape_string($con, $row['Price']);
                                        $img = mysqli_real_escape_string($con, $row['P_img']);
                                        $Title = mysqli_real_escape_string($con, $row['Title']);


                                        $insert = "INSERT INTO cart011 (Dis, Price, P_img, Title) VALUES ('$Dis', '$Price', '$img', '$Title')";
                                        $resInsert = mysqli_query($con, $insert);

                                        if ($resInsert) {

                                            $delete = "DELETE FROM cart01 WHERE sNo='$serial'";
                                            mysqli_query($con, $delete);

                                            echo "<script>
                                            alert('Service moved to reject table successfully!');
                                                window.location.href='rejectservice.php';
                                            </script>";
                                        } else {
                                            echo "<script>alert('Error inserting into reject table!');</script>";
                                        }
                                    }
                                }
                                ?>

                            </table>
                        </div>
                    </div>

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