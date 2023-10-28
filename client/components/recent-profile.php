<div class="card">

        <div class="card-body">
            <h5 class="card-title">My Activities</h5>
            <div class="img-bx">
                <img src="../../public/assets/images/slider-dec.png" alt="">
            </div>

            <div class="activity" style="margin-top: 30px;">
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
                    echo "No Activities Yest";
                endif;
                ?>
            </div>

        </div>


    <div class="card-body"><?php include("../../components/activity-btn.php") ?></div>
</div>