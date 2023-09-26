<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home

    </title>


    <link rel="stylesheet" href="../../assets/css/main.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../assets/css/user.css">

    <?php include_once("../../components/vendorCSSLinks.php") ?>

</head>

<body>
    <?php include_once("../../components/sidebar.php") ?>

    <main id="main" class="main user-main dashboard">

        <section class="section">
            <div class="row">
                <div class="col-lg-8">

                    <div class="page-header d-flex align-items-center">
                        <div class="pagetitle">
                            <h1>Dashboard</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="search-bar">
                            <form class="search-form d-flex align-items-center" method="POST" action="#">
                                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="welcome-message card col-lg-12">
                        <div class="message">
                            <h3>Hi, <b>Name</b> </h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt aliquam vel ad natus
                                quisquam
                                maiores libero laboriosam sequi sunt sint!</p>
                            <?php include("../../components/activity-btn.php") ?>
                        </div>
                        <div class="col-lg-6 img">
                            <img src="../../assets/img/dash.png" alt="">
                        </div>

                    </div>


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
                                            <h6>21</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">completed</span>

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
                                            <h6>$3,264</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span>  -->
                                            <span class="text-muted small pt-2 ps-1">Upcoming</span>

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
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Activities</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->



                    </div>

                    <!-- 
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent</h5>

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Going to School
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <p>Name: Catherine Vidas</p>
                                                <p>Date: 09/34/34</p>
                                                <p>Time: 09:25 AM</p>
                                                <p>Location: USC-TC</p>
                                                <p>OOTD: Uniform</p>
                                                <button type="button" class="btn btn-primary rounded-pill">Edit</button>
                                                <button type="button" class="btn btn-warning rounded-pill">Set</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion,
                                                which is
                                                intended to demonstrate the <code>.accordion-flush</code> class.
                                                This is
                                                the
                                                second item's accordion body. Let's imagine this being filled
                                                with some
                                                actual content.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> -->

                    <!-- <div class="card col-lg-12">
                        <div class="card-body">
                            <h5 class="card-title">My Activities</h5>

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                        aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-progress-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-progress" type="button" role="tab"
                                        aria-controls="pills-progress" aria-selected="false" tabindex="-1">In
                                        progress</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-Completed-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Completed" type="button" role="tab"
                                        aria-controls="pills-Completed" aria-selected="false"
                                        tabindex="-1">Completed</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-Upcoming-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Upcoming" type="button" role="tab"
                                        aria-controls="pills-Upcoming" aria-selected="false"
                                        tabindex="-1">Upcoming</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-canceled-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-canceled" type="button" role="tab"
                                        aria-controls="pills-canceled" aria-selected="false"
                                        tabindex="-1">Canceled</button>
                                </li>
                            </ul>




                            <div class="tab-content pt-2" id="myTabContent">
                                <div class="tab-pane fade active show" id="pills-all" role="tabpanel"
                                    aria-labelledby="all-tab">

                                    <div class="accordion accordion-flush" id="myaccordion">

                                        <?php
                                        include_once("../../../server/config/dbUtil.php");
                                        $conn = getConnection();
                                        $sql = "SELECT * FROM activity";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) :
                                            while ($row = mysqli_fetch_assoc($result)) :
                                        ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-heading<?= $row['activityID'] ?>">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse<?= $row['activityID'] ?>"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    <?= $row['act_title']; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-collapse<?= $row['activityID'] ?>"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="flush-heading<?= $row['activityID'] ?>"
                                                data-bs-parent="#myaccordion">
                                                <div class="accordion-body">
                                                    <p>Description:
                                                        <?= $row['act_desc'] ?>
                                                    </p>
                                                    <p>Date:
                                                        <?= $row['act_date'] ?> <span>Time:
                                                            <?= $row['act_time'] ?>
                                                        </span>
                                                    </p>
                                                    <p>Location:
                                                        <?= $row['act_location'] ?>
                                                    </p>
                                                    <p>OOTD:
                                                        <?= $row['act_ootd'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <?php
                                            endwhile;
                                        else :
                                            echo "0 results";
                                        endif;
                                        ?>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-progress" role="tabpanel"
                                    aria-labelledby="progress-tab">
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="bi bi-arrow-repeat text-primary"></i> In
                                            Progress
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-arrow-repeat text-primary"></i> In
                                            Progress
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-arrow-repeat text-primary"></i> In
                                            Progress
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-arrow-repeat text-primary"></i> In
                                            Progress
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-Upcoming" role="tabpanel"
                                    aria-labelledby="Upcoming-tab">
                                    <ul class="list-group">
                                        <li class="list-group-item"><i
                                                class="bi bi-exclamation-octagon me-1 text-warning"></i>
                                            Upcoming</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-canceled" role="tabpanel"
                                    aria-labelledby="canceled-tab">
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="bi bi-x-circle text-danger"></i> Canceled
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-x-circle text-danger"></i> Canceled
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-Completed" role="tabpanel"
                                    aria-labelledby="Completed-tab">
                                    <ul class="list-group">
                                        <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i>
                                            Completed
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i>
                                            Completed
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i>
                                            Completed
                                        </li>
                                        <li class="list-group-item"><i class="bi bi-check-circle me-1 text-success"></i>
                                            Completed
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div> -->





                    <!-- announcement -->
                    <!-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Announcements</h5>

                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                                    <small>And some small print.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
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
                                </a>
                            </div>

                        </div>
                    </div> -->
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

                        <div class="card-body">
                            <h5 class="card-title">Recent</h5>

                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <i class="bi bi-star me-1"></i>
                                A simple primary alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <i class="bi bi-collection me-1"></i>
                                A simple secondary alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-1"></i>
                                A simple success alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-octagon me-1"></i>
                                A simple danger alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                A simple warning alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="bi bi-info-circle me-1"></i>
                                A simple info alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <i class="bi bi-folder me-1"></i>
                                A simple dark alert with icon—check it out!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        </div>


                        <div class="card-body"><?php include("../../components/activity-btn.php") ?></div>
                    </div>

                </div>

            </div>
        </section>


        <?php include_once("../../components/add-activity-modal.php") ?>


    </main>



    <?php include_once("../../components/footer.php") ?>




    <?php include_once("../../components/vendorJSLinks.php") ?>


    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>

</body>

</html>