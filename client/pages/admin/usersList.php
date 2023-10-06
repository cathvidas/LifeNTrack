<?php
include_once("../../../server/controllers/adminSession.php");
include_once("../../../server/config/dbUtil.php");

$conn = getConnection();
include_once("../../../server/controllers/getUserDetails.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Dashboard </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <?php include_once('../../components/vendorCSSLinks.php') ?>

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>


    <?php include_once('../../components/adminHeader.php') ?>
    <?php include_once('../../components/adminSidebar.php') ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Users List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">List of Users <span>| Recent</span></h5>

                                    <table class="table table-borderless user-list-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM user";
                                            $result = mysqli_query($conn, $sql);
                                            $count = 1;    
                                            if (mysqli_num_rows($result) > 0) :
                                                while ($row = mysqli_fetch_assoc($result)) :
                                            ?>
                                                    <tr>
                                                        <th scope="row"><a href="#"><?= $count ?></a></th>
                                                        <td><?= $row['Fullname'] ?></td>
                                                        <td><a href="#" class="text-primary"><?= $row['Email'] ?></a></td>
                                                        <td><?= $row['Role'] ?></td>
                                                        <td><span class="badge bg-success status-field"><?= $row['Status'] ?></span></td>
                                                        <td>
                                                            <button onclick="editUserStatus(<?= $row['userID'] ?>, '<?= $row['Fullname'] ?>')" type="button" class="btn btn-outline-primary user-list-btn" data-bs-toggle="modal" data-bs-target="#userModal">
                                                                Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                            <?php
                                            $count++;
                                                endwhile;
                                            else :
                                                echo "0 results";
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- <modal> -->
                                <div class="card-body">
                                    <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="" method="POST" id="editUserStatusForm">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">
                                                            Set status for <span id="userName"></span></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <fieldset class="row mb-3">
                                                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                                                            <div class="col-sm-10">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="Active" checked="" disabled>
                                                                    <label class="form-check-label" for="gridRadios1">
                                                                        Active
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="Inactive">
                                                                    <label class="form-check-label" for="gridRadios2">
                                                                        Inactive
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="status" id="gridRadios" value="Deactivated">
                                                                    <label class="form-check-label" for="gridRadios3">
                                                                        Deactivate
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->
                                </div>



                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>
        
    <?php include_once('../../components/announceFormModal.php') ?>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>LifeNTrack</span></strong>. All Rights Reserved
        </div>

    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <?php include_once('../../components/vendorJSLinks.php') ?>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>

    <script>
        function editUserStatus(userID, fullname) {
            const form = document.querySelector('#editUserStatusForm');
            const newACtion = `../../../server/controllers/editUser.php?userID=${userID}`;
            form.setAttribute('action', newACtion);
            
            const span = document.querySelector('#userName');
            span.textContent = fullname;
        }
    </script>

</body>

</html>