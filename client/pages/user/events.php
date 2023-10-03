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

        <div class="card col-lg-10">
            <div class="card-body">
                <h5 class="card-title">My Activities</h5>

                <!-- Pills Tabs -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-progress-tab" data-bs-toggle="pill" data-bs-target="#pills-progress" type="button" role="tab" aria-controls="pills-progress" aria-selected="false" tabindex="-1">In
                            progress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Completed-tab" data-bs-toggle="pill" data-bs-target="#pills-Completed" type="button" role="tab" aria-controls="pills-Completed" aria-selected="false" tabindex="-1">Completed</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-Upcoming" type="button" role="tab" aria-controls="pills-Upcoming" aria-selected="false" tabindex="-1">Upcoming</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-canceled-tab" data-bs-toggle="pill" data-bs-target="#pills-canceled" type="button" role="tab" aria-controls="pills-canceled" aria-selected="false" tabindex="-1">Canceled</button>
                    </li>
                </ul>




                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="all-tab">

                        <!-- Accordion without outline borders -->
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
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $row['activityID'] ?>" aria-expanded="false" aria-controls="flush-collapseThree">
                                                <?= $row['act_title']; ?>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse<?= $row['activityID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $row['activityID'] ?>" data-bs-parent="#myaccordion">
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
                        </div><!-- End Accordion without outline borders -->

                    </div>
                    <div class="tab-pane fade" id="pills-progress" role="tabpanel" aria-labelledby="progress-tab">
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
                    <div class="tab-pane fade" id="pills-Upcoming" role="tabpanel" aria-labelledby="Upcoming-tab">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="bi bi-exclamation-octagon me-1 text-warning"></i>
                                Upcoming</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="canceled-tab">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="bi bi-x-circle text-danger"></i> Canceled
                            </li>
                            <li class="list-group-item"><i class="bi bi-x-circle text-danger"></i> Canceled
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-Completed" role="tabpanel" aria-labelledby="Completed-tab">
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
                </div><!-- End Pills Tabs -->

            </div>
        </div>

        <div class="row">
            <div class="card col-lg-5">
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
            </div>

            <div class="card col-lg-5">
                <div class="card-body">
                    <h5 class="card-title">Links and buttons</h5>

                    <div class="list-group">
                        <?php
                        $sql = "SELECT * FROM activity";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) :
                            while ($row = mysqli_fetch_assoc($result)) :
                                
                            $eventID = $row['activityID'];
                        ?>
                                <button type="button" class="list-group-item list-group-item-action event-button" data-bs-toggle="modal" data-bs-target="#display-activity-modal" 
                                data-event-id="<?= $row['activityID'] ?>"
                                data-event-title="<?= $row['act_title'] ?>"
                                data-event-date="<?= $row['act_date'] ?>"
                                data-event-time="<?= $row['act_time'] ?>"
                                data-event-location="<?= $row['act_location'] ?>"
                                data-event-description="<?= $row['act_desc'] ?>"
                                data-event-ootd="<?= $row['act_ootd'] ?>"
                                ><?= $row['act_title'] ?></button>
                        <?php
                            endwhile;
                        else :
                            echo "0 results";
                        endif;
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <!-- display activity modal -->
        <?php include_once('../../components/modify-activity-modal.php') ?>

    </main>

    <?php include_once("../../components/footer.php") ?>

    <?php include_once("../../components/vendorJSLinks.php") ?>

    <script>
        
    document.querySelectorAll('.event-button').forEach(function(button) {
        button.addEventListener('click', function() {
            // alert(this.getAttribute('data-event-id'))
            const eventID = this.getAttribute('data-event-id');
            const eventTitle = this.getAttribute('data-event-title');
            const eventDate = this.getAttribute('data-event-date');
            const eventTime = this.getAttribute('data-event-time');
            const eventLocation = this.getAttribute('data-event-location');
            const eventDescription = this.getAttribute('data-event-description');
            const eventOotd = this.getAttribute('data-event-ootd');

            document.querySelector('#display-activity-modal .modal-title').textContent = eventTitle;
            document.querySelector('#display-activity-modal .event-description').textContent = eventDescription;
            document.querySelector('#display-activity-modal .event-location').textContent = eventLocation;
            document.querySelector('#display-activity-modal .event-date').textContent = eventDate;
            document.querySelector('#display-activity-modal .event-time').textContent = eventTime;
            document.querySelector('#display-activity-modal .event-ootd').textContent = eventOotd;


            document.querySelector('#edit-activity-modal input[name="title"]').value = eventTitle;
            document.querySelector('#edit-activity-modal input[name="date"]').value = eventDate;
            document.querySelector('#edit-activity-modal input[name="time"]').value = eventTime;
            document.querySelector('#edit-activity-modal input[name="address"]').value = eventLocation;
            document.querySelector('#edit-activity-modal textarea[name="description"]').value = eventDescription;
            document.querySelector('#edit-activity-modal input[name="ootd"]').value = eventOotd;

            // const newAction = '../../../server/controllers/updateEvent.php?event=' + eventID;
            const newACtion = `../../../server/controllers/updateEvent.php?event=${eventID}`;
            document.querySelector('#edit-activity-modal form').setAttribute('action', newACtion);
            
        });
    });
    </script>
</body>

</html>