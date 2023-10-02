/<div class="modal fade" id="display-activity-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Activity Title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="fade show" role="alert">
                <h4 class="alert-heading">Description</h4>
                <p>Activity Description Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                <hr>
                <p class="mb-0">Location: Mabolo New Era </p>
                <div class="d-flex add-details">
                    <p class="mb-0">Date: 09/34/34</p>
                    <p class="mb-0">Time: 02:00 AM</p>
                </div>
                <p class="mb-0">OOTD: Casual</p>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>    -->
              </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit-activity-modal">Edit</button>
            <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i> Done</button>
        </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit-activity-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="card" style="margin-bottom: unset;">
                <div class="card-body">
                    <div class="modal-header" style="border: unset;">
                        <h5 class="modal-title">Edit Activity</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" action="../../../server/controllers/addActivity.php"
                        method="POST">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control"
                                    id="floatingTitle" placeholder="Title">
                                <label for="floatingTitle">Title</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingDate"
                                    name="date" placeholder="Date">
                                <label for="floatingDate">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingTime"
                                    name="time" placeholder="Time">
                                <label for="floatingTime">Time</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingAddress"
                                    name="address" placeholder="Address">
                                <label for="floatingAddress">Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description"
                                    placeholder="description" id="floatingDescription"
                                    style="height: 100px;"></textarea>
                                <label for="floatingDescription">description</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="ootd" class="form-control"
                                        id="floatingootd" placeholder="ootd">
                                    <label for="floatingootd">OOTD</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-activity-modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </div>
</div>