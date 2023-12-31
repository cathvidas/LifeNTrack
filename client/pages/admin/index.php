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


    <?php include_once('../../components/vendorCSSLinks.php') ?>

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/admin.css" rel="stylesheet">

</head>

<body>

    <?php include_once('../../components/adminHeader.php') ?>

    <?php include_once('../../components/adminSidebar.php') ?>
    <main id="main" class="main">

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

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Upcoming Activity Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Users</h6>
                                            <?php
                                            $conn = getConnection();
                                            $countSql = "SELECT * FROM user WHERE Role = 'User'";
                                            $countUserResult = mysqli_query($conn, $countSql);
                                            $userCount = mysqli_num_rows($countUserResult);
                                            ?>
                                            <span class="text-primary small pt-1 fw-bold"><?= $userCount ?></span> <span class="text-muted small pt-2 ps-1">total</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Completed  Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-week"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Activities</h6>
                                            <?php
                                            $conn = getConnection();
                                            $countSql = "SELECT * FROM activity";
                                            $countActResult = mysqli_query($conn, $countSql);
                                            $actCount = mysqli_num_rows($countActResult);
                                            ?>
                                            <span class="text-success small pt-1 fw-bold"><?= $actCount ?></span> <span class="text-muted small pt-2 ps-1">total</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->
                                <div class="card-body">
                                    <h5 class="card-title">All Activities</h5>

                                    <!-- Bar Chart -->
                                    <?php
                                    include_once('../../../server/controllers/countActivityPerMonth.php');
                                    ?>
                                    <canvas id="barChart" style="max-height: 400px; display: block; box-sizing: border-box; height: 221px; width: 442px;" width="442" height="221"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#barChart'), {
                                                type: 'bar',
                                                data: {
                                                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                                    datasets: [{
                                                        label: 'All Activities',
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

                        <!-- List of Users -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <!-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> -->

                                <div class="card-body">
                                    <h5 class="card-title">List of Users</h5>

                                    <table class="table table-borderless ">
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
                                            $sql = "SELECT * FROM user WHERE Role = 'User'";
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

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Gender Pie Graph -->
                    <div class="card">

                        <div class="card-body pb-0">
                            <h5 class="card-title">Gender Ratio</h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                            <?php
                            include_once("../../../server/controllers/genderStatistics.php")
                            ?>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'User Gender Ratio',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: <?= $female ?>,
                                                    name: 'Female'
                                                },
                                                {
                                                    value: <?= $male ?>,
                                                    name: 'Male'
                                                },
                                                {
                                                    value: <?= $others ?>,
                                                    name: 'Others'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Gender Pie Graph -->

                </div><!-- End Right side columns -->

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

</body>

</html>

<?php
closeConnection($conn);
?>