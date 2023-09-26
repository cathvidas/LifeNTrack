<?php include_once("../../../server/controllers/getAnnouncement.php") ?>

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
        <div class="card col-6">
            <div class="card-body">
                <h5 class="card-title">Announcements</h5>

                <!-- List group with Advanced Contents -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?= $announcement['title']?></h5>
                            <small class="text-muted"><?= $timeGap ?></small>
                        </div>
                        <p class="mb-1"><?= $announcement["timeCreated"]?></p>
                        <small class="text-muted"><?= $announcement['description']?></small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted"><?= $current->format('Y-m-d H:i:s') ?></small>
                        </div>
                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                        <small class="text-muted">And some muted small print.</small>
                    </a>
                </div><!-- End List group Advanced Content -->

            </div>
        </div>

        <?php
        $date = $announcement['timeCreated'];
        try {
            $dateTimeObject = new DateTime($date);
        
            // Now you can work with $dateTimeObject as a DateTime instance
            echo "Formatted Date and Time: " . $dateTimeObject->format('Y-m-d H:i:s');
        } catch (Exception $e) {
            // Handle any exceptions or display an error message
            echo "Error: " . $e->getMessage();
        }
        ?>

    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>
</body>

</html>