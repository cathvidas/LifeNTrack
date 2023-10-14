<?php
include_once("../../../server/controllers/userSession.php");
include_once("../../../server/controllers/getUserDetails.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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

                    <h5 class="card-title">Daily Updates</h5>
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
                        <div class="card-body">
                            <h5 class="card-title">Bar CHart</h5>

                            <!-- Bar Chart -->
                            <canvas id="barChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 221px; width: 442px;" width="442" height="221"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                                label: 'Bar Chart',
                                                data: [65, 59, 80, 81, 56, 55, 40],
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

                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="card-heading">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>
                                <h4 class="card-title">My Profile</h4>
                            </div>
                            <div class="img-bx">
                                <img src="../../public/assets/images/slider-dec.png" alt="">
                            </div>
                        </div>

                        <div class="">
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
                                <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                                <div class="activity">

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">32 min</div>
                                        <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                        <div class="activity-content">
                                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">56 min</div>
                                        <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                        <div class="activity-content">
                                            Voluptatem blanditiis blanditiis eveniet
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 hrs</div>
                                        <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                        <div class="activity-content">
                                            Voluptates corrupti molestias voluptatem
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 day</div>
                                        <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                        <div class="activity-content">
                                            Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 days</div>
                                        <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                        <div class="activity-content">
                                            Est sit eum reiciendis exercitationem
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">4 weeks</div>
                                        <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                        <div class="activity-content">
                                            Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                        </div>
                                    </div><!-- End activity item-->

                                </div>

                            </div>
                        </div>


                        <div class="card-body"><?php include("../../components/activity-btn.php") ?></div>
                    </div>

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