

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
                <h1>Announcements</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Announcements</li>
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
        <div class="card col-6">
            <div class="card-body">
                <h5 class="card-title">Announcements</h5>

                <!-- List group with Advanced Contents -->
                <div class="list-group">

                    <?php
                    include_once("../../../server/config/dbUtil.php");
                    $conn = getConnection();
                    include_once("../../../server/controllers/getTimeGap.php");
                    $sql = "SELECT * FROM announcement INNER JOIN user ON user.userID = announcement.adminID ORDER BY timeCreated DESC";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) :
                        while ($row = mysqli_fetch_assoc($result)) :

                            $storedDate = $row['timeCreated'];
                        $timeGap = getTimeGap($storedDate);
                    ?>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?= $row['subject'] ?></h5>
                                    <small class="text-muted"><?= $timeGap ?></small>
                                </div>
                                <p class="mb-1"><?= $row["content"] ?></p>
                                <small class="text-muted"><?= $row['Fullname'] ?></small>
                            </a>

                    <?php
                        endwhile;
                    else :
                        echo "0 results";
                    endif;
                    ?>
                </div><!-- End List group Advanced Content -->

            </div>
        </div>

       

    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>
</body>

</html>