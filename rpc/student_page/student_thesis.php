<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <!-- header -->
    <?php include('../includes/header.php'); ?>

    <!-- title -->
    <title>Student Page</title>
</head>

<body>

    <?php

    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != false) {

        // Check if the user is logged in, if not then redirect him to login page
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            header("location: ../index.php");
            exit;
        }
    }

    ?>

    <!-- include Sidebar  -->
    <?php include('./student_sidebar.php') ?>

    <style>
        .active2 {
            background-color: #B22222;
            width: 6px;
            height: 25px;
        }

        li:nth-child(4) {
            background-color: rgb(255, 245, 200);
            color: #B22222;
            border-radius: 5px;
        }


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
            z-index: 1;
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

        .card {
            /* background-color: #fff; */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            border-left: 10px solid #B22222;
        }

        .card h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            font-size: 14px;
            color: #666;
        }
    </style>

    <div class="content p-0" id="main">

        <!-- include Topbar -->
        <?php include('./student_topbar.php') ?>

        <div class="p-3">
            <div class="card border-0 bg-body">
                <div class="card-header bg-body">
                    <h2>Thesis Status</h2>
                </div>

                <div class="card-body ">
                    <!-- Step Progress Bar -->
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

                    <div class="card-header mt-3 bg-body">
                        <h4>Thesis Title</h4>
                    </div>
                    <div class="card-body">
                        <p class="fs-2"> Innovative Solutions for Sustainable Agriculture</p>
                        <p><b>Submission Date & Time:</b> 2024-10-01 09:00 AM</p>

                        <h6>Group Members:</h6>
                        <p class="m-0">Ethel Dawn Penaso</p>
                        <p class="m-0">Zuji Akiro Omo</p>
                        <p class="m-0">Geszer Gumapac</p>
                        <p class="m-0">Belle bag-ao</p>
                        <p class="m-0">Clifford Graciosa</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>