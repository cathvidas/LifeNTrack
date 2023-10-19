<?php
include_once("../../../server/controllers/userSession.php");
include_once("../../../server/controllers/getUserDetails.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>User dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <?php include_once("../../components/vendorCSSLinks.php") ?>

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../../public/assets/css/templatemo-chain-app-dev.css"> -->
    <link rel="stylesheet" href="../../assets/css/users.css">
</head>

<body>


    <?php include_once("../../components/userHeader.php") ?>
    <?php include_once("../../components/sidebar.php") ?>

    <main id="main" class="main user-main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="welcome-message card col-lg-12">
                        <div class="message">
                            <h3>Hi, <b><?= $userData['Fullname'] ?></b> </h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt aliquam vel ad natus
                                quisquam
                                maiores libero laboriosam sequi sunt sint!</p>
                            <?php include("../../components/activity-btn.php") ?>
                        </div>
                        <div class="col-lg-6 img">
                            <img src="../../assets/img/dash.png" alt="">
                        </div>

                    </div>

                    <h5 class="card-title">Activity Updates</h5>
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

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

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <?php
                                            include_once('../../../server/config/dbUtil.php');
                                            $conn = getConnection();

                                            $sql = "SELECT * from activity WHERE remarks = 'Upcoming' AND userID= $userID";
                                            $result = mysqli_query($conn, $sql);

                                            $count = mysqli_num_rows($result);
                                            ?>
                                            <h6><?= $count ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span>  -->
                                            <span class="text-muted small pt-2 ps-1">Upcoming</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

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
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <?php
                                            include_once('../../../server/config/dbUtil.php');
                                            $conn = getConnection();

                                            $sql = "SELECT * from activity WHERE remarks = 'Done' AND userID= $userID";
                                            $result = mysqli_query($conn, $sql);

                                            $count = mysqli_num_rows($result);
                                            ?>
                                            <h6><?= $count ?></h6>
                                            <span class="text-muted small pt-2 ps-1">Completed</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

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
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <?php
                                            include_once('../../../server/config/dbUtil.php');
                                            $conn = getConnection();

                                            $sql = "SELECT * from activity WHERE remarks = 'Cancelled' AND userID= $userID";
                                            $result = mysqli_query($conn, $sql);

                                            $count = mysqli_num_rows($result);
                                            ?>
                                            <h6><?= $count ?></h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> -->
                                            <span class="text-muted small pt-2 ps-1">Cancelled</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                    </div>
                    <!-- bar chart -->
                    <div class="card">
                        <?php
                        function countActivityPerMonth($specifiedMonth)
                        {
                            global $userID;
                            $conn = getConnection();
                            $sql = "SELECT * FROM activity WHERE userID = $userID";
                            $result = mysqli_query($conn, $sql);

                            $activityCount = 0;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $datetimeString = $row['act_date'];
                                    $dateTime = new DateTime($datetimeString);
                                    $timestamp = $dateTime->getTimestamp();

                                    $month = date('n', $timestamp);

                                    if ($month == $specifiedMonth) {
                                        $activityCount++;
                                    }
                                }

                                return $activityCount;
                            } else {
                                return 0;
                            }
                        }

                        ?>

                        <div class="card-body">
                            <h5 class="card-title">My Activities</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 242px; width: 485px;" width="485" height="242"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                            datasets: [{
                                                label: 'My Activities',
                                                data: [<?= countActivityPerMonth(1) ?>, <?= countActivityPerMonth(2) ?>, <?= countActivityPerMonth(3) ?>, <?= countActivityPerMonth(4) ?>, <?= countActivityPerMonth(5) ?>, <?= countActivityPerMonth(6) ?>, <?= countActivityPerMonth(7) ?>, <?= countActivityPerMonth(8) ?>, <?= countActivityPerMonth(9) ?>, <?= countActivityPerMonth(10) ?>, <?= countActivityPerMonth(11) ?>, <?= countActivityPerMonth(12) ?>],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(201, 203, 207, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(153, 102, 255)',
                                                    'rgb(201, 203, 207)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                            </script>
                            <!-- End Bar CHart -->

                        </div>
                    </div>
                </div>



                <div class="col-lg-4 right">
                    <?php include_once('../../components/recent-profile.php'); ?>

                </div>

            </div>


        </section>
        <?php include_once("../../components/add-activity-modal.php") ?>

    </main><!-- End #main -->



    <?php include_once("../../components/footer.php") ?>




    <?php include_once("../../components/vendorJSLinks.php") ?>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/user.js"></script>

</body>

</html>