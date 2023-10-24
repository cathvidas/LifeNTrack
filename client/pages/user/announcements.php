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
    <title>Announcements</title>
    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



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
            <h1>Announcements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Announcements</li>
                </ol>
            </nav>
        </div>


        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <!-- <div class="card col-lg-10">
                        <div class="card-body">
                            <h5 class="card-title">Announcements</h5>

                            <div class="list-group"> -->

                    <?php
                    include_once("../../../server/config/dbUtil.php");
                    $conn = getConnection();
                    include_once("../../../server/controllers/getTimeGap.php");
                    $sql = "SELECT * FROM announcement ORDER BY timeCreated DESC";
                    // $sql = "SELECT * FROM announcement INNER JOIN user ON user.userID = announcement.adminID ORDER BY timeCreated DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) :

                            $storedDate = $row['timeCreated'];
                            $timeGap = getTimeGap($storedDate);
                    ?>
                            <div class="card anouncement-list-item">
                                <div class="card-body">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?= $row['subject'] ?></h5>
                                        <small class="text-muted"><?= $timeGap ?></small>
                                    </div>
                                    <?= $row["content"] ?>
                                    <!-- <small class="text-muted"><?= $row['Fullname'] ?></small> -->
                                </div>
                            </div>

                    <?php
                        endwhile;
                    else :
                        echo "0 results";
                    endif;
                    ?>
                    <!-- </div>

                        </div>
                    </div> -->
                </div>

                <div class="col-lg-4 right">
                    <?php include_once('../../components/recent-profile.php'); ?>

                </div>
            </div>
        </section>


        <?php include_once("../../components/add-activity-modal.php") ?>
    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>
    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/user.js"></script>
</body>

</html>