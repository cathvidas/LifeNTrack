<?php
include_once("../../../server/controllers/userSession.php");
include_once("../../../server/controllers/getUserDetails.php");


$user = $_GET['user'];

$getDataSql = "SELECT * FROM user WHERE userID = $user";
$getResult = mysqli_query($conn, $getDataSql);
$getUserData = mysqli_fetch_assoc($getResult);
// echo $userData['Fullname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

    <?php include_once("../../components/vendorCSSLinks.php") ?>
    <link rel="stylesheet" href="../../assets/css/main.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../../assets/css/user.css">
</head>

<body>


    <?php include_once("../../components/sidebar.php") ?>
    <main id="main" class="main user-main">

        <div class="page-header d-flex align-items-center">
            <div class="pagetitle">
                <h1>People</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><?= $getUserData['Fullname'] ?></li>
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
        <section class="section profile other-user-profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <i class="ri-account-circle-fill profile"></i>
                            <h2><?= $getUserData['Fullname'] ?></h2>
                            <p><?= $getUserData['Email'] ?></p>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <?php
                                $sql = "SELECT * FROM followers WHERE userID = $userID AND followingUserID = $user";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // User is not following the other user
                                    echo '<a href="../../../server/controllers/UfollowUser.php?user-id=' . $getUserData['userID'] . '">
                <button class="btn btn-outline-dark" type="button">Following</button>
              </a>';
                                } else {
                                    // User is not following the other user
                                    echo '<a href="../../../server/controllers/UfollowUser.php?user-id=' . $getUserData['userID'] . '">
                <button class="btn btn-primary" type="button"><i class="ri-add-line"></i>Follow</button>
              </a>';
                                }

                                $_SESSION["last_page"] = "../../client/pages/user/user-page.php?user=$user";
                                closeConnection($conn);
                                ?>
                            </div>

                        </div>
                        <div class="bio-section card-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dolore temporibus beatae animi a provident. Cumque voluptate, quibusdam nihil commodi, totam assumenda expedita recusandae explicabo neque tempora porro facere nam fugit nemo, incidunt ipsum. Ad eaque ut repellat? Quam explicabo velit deserunt ipsam distinctio a debitis ex odit in sed!
                        </div>
                    </div>

                </div>

                <div class="card col-xl-8">
                    <div class="card-body">
                        <h5 class="card-title">Activities</h5>

                        <!-- List group with Advanced Contents -->
                        <div class="list-group">
                            <?php
                            include_once("../../../server/config/dbUtil.php");
                            $conn = getConnection();
                            $sql = "SELECT * FROM activity WHERE userID = $user";
                            $result = mysqli_query($conn, $sql);

                            include_once("../../../server/controllers/getTimeGap.php");

                            if (mysqli_num_rows($result) > 0) :
                                while ($row = mysqli_fetch_assoc($result)) :

                                    $storedDate = $row['activityCreated'];
                                    $timeGap = getTimeGap($storedDate);
                            ?>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><?= $row['act_title'] ?></h5>
                                            <small><?= $timeGap ?></small>
                                        </div>
                                        <p class="mb-1"><?= $row['act_desc'] ?></p>
                                        <div>
                                            <small><b>Date: </b><?= $row['act_date'] ?></small>
                                            <small><b>Time: </b><?= $row['act_time'] ?></small>
                                        </div>
                                        <div>
                                            <small><b>Location: </b><?= $row['act_location'] ?></small>
                                        </div>
                                        <small><b>Ootd: </b> <?= $row['act_ootd'] ?></small>
                                    </a>

                            <?php
                                endwhile;
                            else :
                                echo "No activities yet";
                            endif;
                            ?>
                        </div><!-- End List group Advanced Content -->

                    </div>

                </div>
            </div>
        </section>


    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>
</body>

</html>