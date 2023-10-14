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
  <link rel="stylesheet" href="../../public/assets/css/templatemo-chain-app-dev.css">
  <link rel="stylesheet" href="../../assets/css/users.css">
</head>

<body>


  <?php include_once("../../components/userHeader.php") ?>
  <?php include_once("../../components/sidebar.php") ?>

  <main id="main" class="main user-main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-8">
          <div class="card col-lg-12">
            <div class="card-body">
              <h5 class="card-title">All Activities</h5>

              <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Upcoming-tab" data-bs-toggle="pill" data-bs-target="#pills-Upcoming" type="button" role="tab" aria-controls="pills-Upcoming" aria-selected="false" tabindex="-1">Upcoming</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-Completed-tab" data-bs-toggle="pill" data-bs-target="#pills-Completed" type="button" role="tab" aria-controls="pills-Completed" aria-selected="false" tabindex="-1">Completed</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-canceled-tab" data-bs-toggle="pill" data-bs-target="#pills-canceled" type="button" role="tab" aria-controls="pills-canceled" aria-selected="false" tabindex="-1">Cancelled</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade active show" id="pills-all" role="tabpanel" aria-labelledby="all-tab">
                  <div class="accordion accordion-flush eventsList" id="allActivities">

                    <?php
                    include_once("../../../server/config/dbUtil.php");
                    $conn = getConnection();

                    $sql = "SELECT * FROM activity
                                    INNER JOIN user ON user.userID = activity.userID
                                     WHERE user.userID = $userID OR activityID IN(SELECT activityID FROM invitation WHERE recipientID = $userID AND invitationStatus = 'accepted')";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) :
                      while ($row = mysqli_fetch_assoc($result)) :
                    ?>
                        <?php
                        if ($row['remarks'] == 'Upcoming') {
                          echo '<div class="accordion-item event-upcoming">';
                        }
                        if ($row['remarks'] == 'Done') {
                          echo '<div class="accordion-item event-done">';
                        }
                        if ($row['remarks'] == 'Cancelled') {
                          echo '<div class="accordion-item event-cancel">';
                        }
                        ?>

                        <h2 class="accordion-header" id="flush-heading<?= $row['activityID'] ?>">
                          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $row['activityID'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $row['activityID'] ?>">
                            <?php
                            if ($row['userID'] == $userID) {
                              echo '<i class="bi bi-person-fill"></i>';
                            } else {
                              echo '<i class="bi bi-people-fill"></i>';
                            }
                            ?>
                            <?= $row['act_title'] ?>
                          </button>
                        </h2>
                        <div id="flush-collapse<?= $row['activityID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $row['activityID'] ?>" data-bs-parent="#allActivities" style="">
                          <div class="accordion-body">
                            <p class="desc"><?= $row['act_desc'] ?></p>
                            <div class="add-details d-flex">
                              <div class="datetime">
                                <p><i class="bi bi-calendar-event-fill"></i> <?= $row['act_date'] ?> </p>
                                <p><i class="bi bi-alarm-fill"></i> <?= $row['act_time'] ?></p>
                              </div>
                              <div>
                                <p><i class="bi bi-geo-alt-fill"></i> <?= $row['act_location'] ?></p>
                                <p><i class="bi bi-bag-check-fill"></i> <?= $row['act_ootd'] ?></p>
                              </div>
                            </div>
                            <?php
                            if ($row['userID'] != $userID) {
                              echo '<i class="bi bi-people-fill"></i><small>' . $row['Fullname'] . '</small>';
                            } ?>
                          </div>
                        </div>
                  </div>
              <?php
                      endwhile;
                    else :
                      echo "0 results";
                    endif;
                    closeConnection($conn);
              ?>
                </div>

              </div>
              <div class="tab-pane fade" id="pills-Upcoming" role="tabpanel" aria-labelledby="Upcoming-tab">

                <ul class="list-group">
                  <?php
                  include_once("../../../server/config/dbUtil.php");
                  $conn = getConnection();
                  $sql = "SELECT * FROM activity WHERE userID = $userID AND remarks = 'Upcoming'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) :
                    while ($row = mysqli_fetch_assoc($result)) :
                  ?>
                      <div class="activitiesList">
                        <div class="filter">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                            <li class="event-button dropdown-item" data-bs-toggle="modal" data-bs-target="#set-activity-modal" data-event-id="<?= $row['activityID'] ?>">Set</li>
                            <li class="event-button dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-activity-modal" data-event-id="<?= $row['activityID'] ?>" data-event-title="<?= $row['act_title'] ?>" data-event-date="<?= $row['act_date'] ?>" data-event-time="<?= $row['act_time'] ?>" data-event-location="<?= $row['act_location'] ?>" data-event-description="<?= $row['act_desc'] ?>" data-event-ootd="<?= $row['act_ootd'] ?>">Edit</li>
                            <li class="event-button dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-activity-modal" data-event-id="<?= $row['activityID'] ?>">Delete</li>
                          </ul>
                        </div>
                        <li class="event-button list-group-item" data-bs-toggle="modal" data-bs-target="#display-activity-modal" data-event-id="<?= $row['activityID'] ?>" data-event-title="<?= $row['act_title'] ?>" data-event-date="<?= $row['act_date'] ?>" data-event-time="<?= $row['act_time'] ?>" data-event-location="<?= $row['act_location'] ?>" data-event-description="<?= $row['act_desc'] ?>" data-event-ootd="<?= $row['act_ootd'] ?>"><i class="bi bi-star me-1 text-warning"></i>
                          <?= $row['act_title'] ?>
                        </li>
                      </div>
                  <?php
                    endwhile;
                  else :
                    echo "0 results";
                  endif;
                  closeConnection($conn);
                  ?>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="canceled-tab">

                <ul class="list-group">

                  <?php
                  include_once("../../../server/config/dbUtil.php");
                  $conn = getConnection();
                  $sql = "SELECT * FROM activity WHERE userID = $userID AND remarks = 'Cancelled'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) :
                    while ($row = mysqli_fetch_assoc($result)) :
                  ?>
                      <div class="activitiesList">
                        <div class="filter">
                          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <!-- <li class="dropdown-header text-start">
                                                    <h6>Filter</h6>
                                                </li> -->

                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                          </ul>
                        </div>
                        <li class="event-button list-group-item" data-bs-toggle="modal" data-bs-target="#display-activity-modal" data-event-id="<?= $row['activityID'] ?>" data-event-title="<?= $row['act_title'] ?>" data-event-date="<?= $row['act_date'] ?>" data-event-time="<?= $row['act_time'] ?>" data-event-location="<?= $row['act_location'] ?>" data-event-description="<?= $row['act_desc'] ?>" data-event-ootd="<?= $row['act_ootd'] ?>"><i class=" bi bi-x-circle text-danger text-danger"></i>
                          <?= $row['act_title'] ?>
                        </li>
                      </div>
                  <?php
                    endwhile;
                  else :
                    echo "0 results";
                  endif;
                  closeConnection($conn);
                  ?>
                </ul>
              </div>
              <div class="tab-pane fade" id="pills-Completed" role="tabpanel" aria-labelledby="Completed-tab">

                <div class="accordion accordion-flush eventsList" id="cancelledActivities">

                  <?php
                  include_once("../../../server/config/dbUtil.php");
                  $conn = getConnection();

                  $sql = "SELECT * FROM activity WHERE userID = $userID AND remarks = 'Done'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) :
                    while ($row = mysqli_fetch_assoc($result)) :
                  ?>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading<?= $row['activityID'] ?>">
                          <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $row['activityID'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $row['activityID'] ?>">
                            <i class="bi bi-check-circle me-1 text-success"></i>
                            <?= $row['act_title'] ?>
                          </button>
                        </h2>
                        <div id="flush-collapse<?= $row['activityID'] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $row['activityID'] ?>" data-bs-parent="#cancelledActivities" style="">
                          <div class="accordion-body">
                            <p class="desc"><?= $row['act_desc'] ?></p>
                            <div class="add-details d-flex">
                              <div class="datetime">
                                <p><i class="bi bi-calendar-event-fill"></i> <?= $row['act_date'] ?> </p>
                                <p><i class="bi bi-alarm-fill"></i> <?= $row['act_time'] ?></p>
                              </div>
                              <div>
                                <p><i class="bi bi-geo-alt-fill"></i> <?= $row['act_location'] ?></p>
                                <p><i class="bi bi-bag-check-fill"></i> <?= $row['act_ootd'] ?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                    endwhile;
                  else :
                    echo "0 results";
                  endif;
                  closeConnection($conn);
                  ?>
                </div>
              </div>
            </div><!-- End Pills Tabs -->

          </div>
        </div>

        <?php include("../../components/activity-btn.php") ?>

        <div class="row col-lg-12" id="event-list-group" style="margin-top: 50px">
          <h5 class="card-title">My Activities</h5>

          <?php
          include_once("../../../server/config/dbUtil.php");
          $conn = getConnection();
          $sql = "SELECT * FROM activity WHERE userID = $userID
                    ORDER BY act_date ASC";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) :
            while ($row = mysqli_fetch_assoc($result)) :

              $eventID = $row['activityID'];
          ?>


              <div class="col-xxl-4 col-md-6">
                <div class="service-item fourth-service event-cards">
                  <div class="head d-flex justify-content-between">
                    <div class="icon"></div>
                  </div>
                  <h4><?= $row['act_title'] ?></h4>
                  <p class="event-desc"><?= $row['act_desc'] ?></p>
                  <div>

                    <small><b>Date:</b> <?= $row['act_date'] ?></small>
                    <small><b>Time:</b> <?= $row['act_time'] ?></small>
                  </div>
                  <div>
                    <small><b>Location:</b> <?= $row['act_location'] ?></small>
                  </div>
                  <small><b>OOTD:</b> <?= $row['act_ootd'] ?></small>
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

      <div class="col-lg-4">
        <div class="col-lg-12">
          <div class=" recent-sales overflow-auto">

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

            <div class="card-body eventsList">
              <h5 class="card-title">Invitation</h5>

              <?php
              include_once('../../../server/config/dbUtil.php');
              $conn = getConnection();

              include_once("../../../server/controllers/getTimeGap.php");
              $sql = "SELECT * FROM activity 
                                    INNER JOIN user ON user.userID = activity.userID 
                                    INNER JOIN invitation ON activity.activityID = invitation.activityID
                                    WHERE activity.activityID IN( 
                                    SELECT activityID FROM invitation WHERE recipientID = $userID AND invitationStatus = 'pending') 
                                    ORDER BY act_date ASC";
              $result = mysqli_query($conn, $sql);
              $count = 1;
              if (mysqli_num_rows($result) > 0) :
                while ($row = mysqli_fetch_assoc($result)) :

                  $storedDate = $row['inviteAt'];
                  $timeGap = getTimeGap($storedDate);
              ?>
                  <div class="card info-card sales-card">



                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <h5 class="card-title"><?= $row['act_title'] ?> <span>| <b><?= $row['Fullname'] ?></b></span></h5>
                        <h6 class="card-title"><span><?= $timeGap ?></span></h6>
                      </div>
                      <div class="">
                        <!-- <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-cart"></i>
                        </div> -->
                        <div class="ps-3">
                          <p><?= $row['act_desc'] ?></p>

                          <div class="add-details d-flex">
                            <div class="datetime">
                              <p><i class="bi bi-calendar-event-fill"></i> <?= $row['act_date'] ?> </p>
                              <p><i class="bi bi-alarm-fill"></i> <?= $row['act_time'] ?></p>
                            </div>
                            <div>
                              <p><i class="bi bi-geo-alt-fill"></i> <?= $row['act_location'] ?></p>
                              <p><i class="bi bi-bag-check-fill"></i> <?= $row['act_ootd'] ?></p>
                            </div>
                          </div>
                          <div class="invite-action-btn">
                            <a href="../../../server/controllers/updateInvitation.php?id=<?= $row['invitationID'] ?>&status=accepted">
                              <button type="button" class="btn btn-success rounded-pill"> Accept</button>
                            </a>
                            <a href="../../../server/controllers/updateInvitation.php?id=<?= $row['invitationID'] ?>&status=decline">
                              <button type="button" class="btn btn-outline-danger rounded-pill">Decline</button>
                            </a>
                          </div>
                          <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                        </div>
                      </div>
                    </div>

                  </div>
              <?php
                  $count++;
                endwhile;
              else :
                echo "No Invitation Yet";
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php include("../../components/add-activity-modal.php") ?>
      <!-- display activity modal -->
      <?php include_once('../../components/modify-activity-modal.php') ?>

    </section>

  </main><!-- End #main -->



  <?php include_once("../../components/footer.php") ?>




  <?php include_once("../../components/vendorJSLinks.php") ?>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/user.js"></script>

</body>

</html>