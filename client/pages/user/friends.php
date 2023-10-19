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
            <h1>People</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">People</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class=" col-lg-12">
                        <!-- <div class="card"> -->
                        <div class="card-body">
                            <h5 class="card-title">Following</h5>

                            <!-- List group with custom content -->
                            <div class="friend-list row">

                                <?php
                                include_once("../../../server/config/dbUtil.php");
                                $conn = getConnection();
                                // $sql = "SELECT * FROM user WHERE Role='user'";
                                $sql = "SELECT * FROM user WHERE userID IN (SELECT followingUserID FROM followers WHERE userID = $userID)";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) :
                                    while ($row = mysqli_fetch_assoc($result)) :
                                ?>
                                        <div class="card col-lg-4">
                                            <a href="user-page.php?user=<?= $row['userID'] ?>">
                                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon-bx"><i class="ri-account-circle-fill"></i></div>
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><?= $row['Fullname'] ?></div>
                                                            <span class="badge bg-primary rounded-pill">14</span> new activities
                                                        </div>
                                                    </div>
                                                    <a href="../../../server/controllers/UfollowUser.php?user-id=<?= $row['userID'] ?>">
                                                        <button type="button" class="btn btn-outline-dark rounded-pill">Following</button>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>


                                <?php
                                    endwhile;
                                else :
                                    echo "0 results";
                                endif;

                                $_SESSION["last_page"] = "../../client/pages/user/friends.php";
                                ?>
                            </div><!-- End with custom content -->

                        </div>
                        <!-- </div> -->
                    </div>
                    <div class=" col-lg-12">
                        <!-- <div class="card"> -->
                        <div class="card-body">
                            <h5 class="card-title">People You May Know</h5>

                            <!-- List group with custom content -->
                            <div class="friend-list row">

                                <?php
                                include_once("../../../server/config/dbUtil.php");
                                $conn = getConnection();
                                // $sql = "SELECT * FROM user";

                                $sql = "SELECT * FROM user WHERE userID NOT IN (SELECT followingUserID FROM followers WHERE userID = $userID) AND userID != $userID";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) :
                                    while ($row = mysqli_fetch_assoc($result)) :
                                ?>
                                        <div class="card col-lg-4">
                                            <a href="user-page.php?user=<?= $row['userID'] ?>">
                                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div class="lft d-flex align-items-center">
                                                        <div class="icon-bx"><i class="ri-account-circle-fill"></i></div>
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold"><?= $row['Fullname'] ?></div>
                                                            <span class="badge bg-primary rounded-pill">14</span> new activities
                                                        </div>
                                                    </div>
                                                    <a href="../../../server/controllers/UfollowUser.php?user-id=<?= $row['userID'] ?>">
                                                        <button type="button" class="btn btn-primary rounded-pill"><i class="ri-add-line"></i>Follow</button>
                                                    </a>
                                                </div>
                                            </a>
                                        </div>

                                <?php
                                    endwhile;
                                else :
                                    echo "0 results";
                                endif;
                                $_SESSION["last_page"] = "../../client/pages/user/friends.php";
                                ?>
                            </div><!-- End with custom content -->

                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-lg-4 right">
                    <?php include_once('../../components/recent-profile.php'); ?>

                </div>
            </div>
        </section>

    </main><!-- End #main -->



    <?php include_once("../../components/footer.php") ?>




    <?php include_once("../../components/vendorJSLinks.php") ?>

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/user.js"></script>

</body>

</html>