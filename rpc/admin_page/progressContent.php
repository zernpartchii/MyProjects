<style>
/* Step Progress Bar */
.step-progress {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    position: relative;
    padding: 20px 0;
    /* Top and bottom padding */
}

.step {
    position: relative;
    flex: 1;
    text-align: center;
}

/* Add a line connecting all steps */
.step-progress:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 4px;
    /* Line thickness */
    background-color: #ddd;
    /* Connecting line color */
    /* z-index: -1; */
}

.step-number {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: white;
    /* Circle background color */
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    /* z-index: 1; */
    margin: 0 auto;
    /* Center the circle */
    border: 2px solid #B22222;
    /* Circle border color */
    color: #B22222;
    /* Circle number color */
    font-weight: bold;
    font-size: 18px;
}

.step.completed .step-number {
    background-color: #B22222;
    /* Color for completed steps */
    color: white;
    /* Text color for completed steps */
}

.step-label {
    margin-top: 10px;
    font-size: 14px;
    /* Slightly larger font for readability */
    color: black;
    /* Step label color */
}
</style>
<div class="card border-0 container-fluid py-3">
    <div class="card border-0 pt-0 pb-3">
        <div class="card-header bg-body d-flex align-items-center ps-1 py-0 mb-3">
            <p class="fs-2 m-0 font-monospace text-uppercase">Progress Control</p>
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body py-0">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex mb-3">
                        <h6>Thesis Title:</h6>
                        <h6 class="ms-auto">PIN: 678901</h6>
                    </div>
                    <p class="fs-6">Criminals: Are there more men or women? Politics and Prisoners: Should
                        prisoners have the right to vote? Victimless Crime: Does it exist? Sexual Harassment: Are women
                        the only victims?</p>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3 step-progress">
                        <div class="step completed">
                            <div class="step-number">1</div>
                            <div class="step-label">Submitted to RPC</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">2</div>
                            <div class="step-label">For Checking</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">3</div>
                            <div class="step-label">Approved</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">4</div>
                            <div class="step-label">Next Step</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">5</div>
                            <div class="step-label">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button class="ms-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminControlModal">
                        Update Progress Status</button>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex mb-3">
                        <h6>Thesis Title:</h6>
                        <h6 class="ms-auto">PIN: 678901</h6>
                    </div>
                    <p class="fs-6">The best practices for dealing with tight project deadlines.</p>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3 step-progress">
                        <div class="step completed">
                            <div class="step-number">1</div>
                            <div class="step-label">Submitted to RPC</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">2</div>
                            <div class="step-label">For Checking</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">3</div>
                            <div class="step-label">Approved</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">4</div>
                            <div class="step-label">Next Step</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">5</div>
                            <div class="step-label">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button class="ms-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminControlModal">
                        Update Progress Status</button>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex mb-3">
                        <h6>Thesis Title:</h6>
                        <h6 class="ms-auto">PIN: 678901</h6>
                    </div>
                    <p class="fs-6">What is a borderline personality disorder? What leads to depression in a person?</p>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3 step-progress">
                        <div class="step completed">
                            <div class="step-number">1</div>
                            <div class="step-label">Submitted to RPC</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">2</div>
                            <div class="step-label">For Checking</div>
                        </div>
                        <div class="step completed">
                            <div class="step-number">3</div>
                            <div class="step-label">Approved</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">4</div>
                            <div class="step-label">Next Step</div>
                        </div>
                        <div class="step inactive">
                            <div class="step-number">5</div>
                            <div class="step-label">Completed</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <button class="ms-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#adminControlModal">
                        Update Progress Status</button>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/progressStatus.php'); ?>