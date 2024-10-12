<div class="card border-0 container-fluid py-3">
    <div class="card border-0 pt-0 pb-3">
        <div class="card-body ps-1 py-0">
            <p class="fs-2 font-monospace text-uppercase text-start border-bottom">Schedule Availability</p>
        </div>
        <div class="card-body py-0">
            <!-- Form for posting available schedule -->
            <form>
                <div class="d-flex flex-wrap gap-3">
                    <div class="flex-fill">
                        <label for="available-date" class="form-label">Available Date:</label>
                        <input type="date" class="form-control" id="available-date" required>
                    </div>
                    <div class="flex-fill">
                        <label for="start-time" class="form-label">Start Time:</label>
                        <input type="time" class="form-control" id="start-time" required>
                    </div>
                    <div class="flex-fill">
                        <label for="end-time" class="form-label">End Time:</label>
                        <input type="time" class="form-control" id="end-time" required>
                    </div>
                </div>
                <div class="my-4">
                    <label for="notes" class="form-label">Additional Notes:</label>
                    <textarea class="form-control" id="notes" rows="3"
                        placeholder="Enter any additional information or restrictions..."></textarea>
                </div>
                <button type="submit" class=" btn btn-primary">Save Schedule</button>
            </form>
        </div>
    </div>
</div>