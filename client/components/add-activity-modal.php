<div class="modal fade" id="verticalycentered" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="card" style="margin-bottom: unset;">
                <div class="card-body">
                    <div class="modal-header" style="border: unset;">
                        <h5 class="modal-title">Add Activity</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" action="../../../server/controllers/addActivity.php?id=<?= $userID ?>"
                        method="POST">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control"
                                    id="floatingTitle" placeholder="Title" required>
                                <label for="floatingTitle">Title</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingDate"
                                    name="date" placeholder="Date" required>
                                <label for="floatingDate">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="time" class="form-control" id="floatingTime"
                                    name="time" placeholder="Time" required>
                                <label for="floatingTime">Time</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingAddress"
                                    name="address" placeholder="Address" required>
                                <label for="floatingAddress">Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description"
                                    placeholder="description" id="floatingDescription"
                                    style="height: 100px;" required></textarea>
                                <label for="floatingDescription">description</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="ootd" class="form-control"
                                        id="floatingootd" placeholder="ootd" required>
                                    <label for="floatingootd">OOTD</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="inviteFriends">
                            <label class="form-check-label" for="inviteFriends">Invite Friends</label>
                        </div>
                        <div class="col-md-12" id="selectFriends" style="display: none">
                            <div class="form-floating mb-3">
                                <?php 
                                    include_once("../../../server/config/dbUtil.php");
                                    $conn = getConnection();

                                    $sql = "SELECT * FROM user WHERE userID IN (SELECT followingUserID FROM followers WHERE userID = $userID)";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) :
                                        while ($row = mysqli_fetch_assoc($result)) :
                                ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="invitedFriends[]" id="gridCheck<?= $row['userID']?>" value="<?= $row['userID'] ?>">

                                        <label class="form-check-label" for="gridCheck<?= $row['userID']?>">
                                            <?= $row['Fullname']?>
                                        </label>
                                    </div>
                                
                                <?php
                                    endwhile;
                                else :
                                    echo "0 results";
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Activity</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>