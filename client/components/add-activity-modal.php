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
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Activity</button>
                        </div>
                    </form><!-- End floating Labels Form -->

                </div>
            </div>
        </div>
    </div>
</div>