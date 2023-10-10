<?php
include_once("../../../server/controllers/userSession.php");
include_once("../../../server/controllers/getUserDetails.php");
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
                        <li class="breadcrumb-item active">Friends</li>
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
        <div class=" col-12">
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
                            <div class="card col-xxl-3 col-md-6">
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
        <div class=" col-12">
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
                            <div class="card col-xxl-3 col-md-6">
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


    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>
</body>

</html>