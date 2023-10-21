<div class="card">
    <div class="card-body pb-0">
        <!-- <div class="card-heading">
            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>
            <h4 class="card-title">My Profile</h4>
        </div> -->
        <div class="img-bx">
            <img src="../../public/assets/images/slider-dec.png" alt="">
        </div>
    </div>

    <div class="">
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

        <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

            <div class="activity">
                <?php
                include_once("../../../server/config/dbUtil.php");
                $conn = getConnection();
                include_once("../../../server/controllers/getTimeGap.php");
                $activitySql = "SELECT * FROM activity WHERE userID = $userID ORDER BY activityCreated DESC";

                $actResult = mysqli_query($conn, $activitySql);

                if (mysqli_num_rows($actResult) > 0) :
                    while ($row = mysqli_fetch_assoc($actResult)) :
                        $storedDate = $row['activityCreated'];
                        $timeGap = getTimeGap($storedDate);
                ?>


                        <div class="activity-item d-flex">
                            <div class="activite-label">
                                <?= $timeGap ?></div>
                            <?php
                            if ($row['remarks'] == 'Upcoming') {
                                echo '<i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>';
                            } else if ($row['remarks'] == 'Done') {
                                echo '<i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>';
                            } else if ($row['remarks'] == 'Cancelled') {
                                echo '<i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>';
                            }
                            ?>
                            <!-- <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i> -->
                            <div class="activity-content">
                                <?= $row['act_title'] ?>
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
    </div>


    <div class="card-body"><?php include("../../components/activity-btn.php") ?></div>
</div>