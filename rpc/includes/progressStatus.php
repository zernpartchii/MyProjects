<!-- Admin Control Modal -->
<div class="modal fade" id="adminControlModal" tabindex="-1" aria-labelledby="adminControlModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminControlModalLabel">Progress Control Panel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="">
                    <!-- Level 1 -->
                    <div class="d-flex flex-wrap gap-3">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h6>Select Level 1 Status:</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Pending
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Submitted to RPC
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Level 2 -->
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h6>Select Level 2 Status:</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        For Checking
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Return for Revision
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Resubmitted
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6" checked>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        Re-Checking
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Level 3 -->
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h6>Select Level 3 Status:</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7" checked>
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        Approved
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Level 4 -->
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h6>Select Level 4 Status:</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault8" checked>
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        For Releasing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault9" checked>
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        Released
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Level 5 -->
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h6>Select Level 5 Status:</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault10" checked>
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        Completed
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons: Update Progress and Cancel -->
                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary me-2">Update Status</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>