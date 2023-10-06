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

    <title>Announcements </title>
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
            <h1>Announcements</h1>
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
                                    <h5 class="card-title">Announcements <span>| Recent</span></h5>
                                    <div class="list-group">
                                        
                                    <?php
                                        $sql = "SELECT * FROM announcement";
                                        $result = mysqli_query($conn, $sql);
                                        $count = 1;    
                                        if (mysqli_num_rows($result) > 0) :
                                            while ($row = mysqli_fetch_assoc($result)) :
                                        ?>

                                        <a href="#" class="list-group-item list-group-item-action" >
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1"><?= $row["subject"]?></h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1"><?= $row["content"]?></p>
                                            <small><?= $row["adminId"]?></small>
                                        </a>
                                        
                                        <?php
                                            $count++;
                                                endwhile;
                                            else :
                                                echo "0 results";
                                            endif;
                                            ?>
                                        <!-- <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">List group item heading</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                                            <small class="text-muted">And some muted small print.</small>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">List group item heading</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                                            <small class="text-muted">And some muted small print.</small>
                                        </a> -->
                                    </div>
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