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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Bootstrap core CSS -->
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
                    <li class="breadcrumb-item"><a href="friends.php">People</a></li>
                    <li class="breadcrumb-item active"><?= $getUserData['Fullname'] ?></li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
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
                                $conn = getConnection();
                                $followSql = "SELECT * FROM followers WHERE userID = $userID AND followingUserID = $user";
                                $followResult = mysqli_query($conn, $followSql);

                                if ($followResult->num_rows > 0) {
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
                                    $timestamp = strtotime($row['act_time']);
                                    $formattedTime = date('h:i A', $timestamp);
                                    $storedDate = $row['activityCreated'];
                                    $timeGap = getTimeGap($storedDate);
                            ?>
                                    <a href="#" class="list-group-item list-group-item-action eventsList user-page">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1" style="font-weight: bold;"><?= $row['act_title'] ?></h5>
                                            <small><?= $timeGap ?></small>
                                        </div>
                                        <p class="mb-1"><?= $row['act_desc'] ?></p>
                                        <div class="add-details d-flex">
                                            <div class="datetime">
                                                <p><i class="bi bi-calendar-event-fill"></i> <?= $row['act_date'] ?> </p>
                                                <p><i class="bi bi-alarm-fill"></i> <?= $formattedTime ?></p>
                                            </div>
                                            <div>
                                                <p><i class="bi bi-geo-alt-fill"></i> <?= $row['act_location'] ?></p>
                                                <p><i class="bi bi-bag-check-fill"></i> <?= $row['act_ootd'] ?></p>
                                            </div>
                                        </div>
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

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/user.js"></script>
</body>

</html>

<!-- <?php closeConnection($conn); ?> -->