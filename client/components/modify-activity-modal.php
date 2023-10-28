<div class="modal fade" id="display-activity-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Activity Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="fade show eventsList" role="alert">
                    <p class="event-description">Activity Description Et suscipit deserunt earum itaque dignissimos recusandae dolorem qui. Molestiae rerum perferendis laborum. Occaecati illo at laboriosam rem molestiae sint.</p>
                    <div class="d-flex add-details">
                        <div>
                            <p class="mb-0"><i class="bi bi-calendar-check-fill"></i> <span class="event-date"></span></p>
                            <p class="mb-0"><i class="bi bi-alarm-fill"></i> <span class="event-time"></span></p>
                        </div>
                        <div>
                            <p class="mb-0"><i class="bi bi-geo-alt-fill"></i> <span class="event-location"></span> </p>
                            <p class="mb-0"><i class="bi bi-bag-check-fill"></i> <span class="event-ootd"></span></p>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-activity-modal">Delete</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-activity-modal">Edit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="set-activity-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Set Activity Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <fieldset class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="remark" id="gridRadios1" value="Done" checked="">
                                <label class="form-check-label" for="gridRadios1">
                                    Done
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="remark" id="gridRadios2" value="Cancelled">
                                <label class="form-check-label" for="gridRadios2">
                                    Cancel
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#delete-activity-modal">Delete</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Floating Labels Form -->
                    <form class="row g-3" action="" method="POST">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="title" class="form-control" id="floatingTitle" placeholder="Title">
                                <label for="floatingTitle">Title</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingDate" name="date" placeholder="Date">
                                <label for="floatingDate">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="time" class="form-control" id="floatingTime" name="time" placeholder="Time">
                                <label for="floatingTime">Time</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingAddress" name="address" placeholder="Address">
                                <label for="floatingAddress">Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" placeholder="description" id="floatingDescription" style="height: 100px;"></textarea>
                                <label for="floatingDescription">description</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" name="ootd" class="form-control" id="floatingootd" placeholder="ootd">
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


<div class="modal fade" id="delete-activity-modal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Activity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this activity?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>