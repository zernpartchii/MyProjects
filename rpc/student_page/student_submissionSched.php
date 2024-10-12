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

        li:nth-child(3) {
            background-color: rgb(255, 245, 200);
            color: #B22222;
            border-radius: 5px;
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
            <div class="card border-0 w-100 bg-body p-3">
                <div class="card-header bg-body">
                    <h3>Submission Schedule for Today: <?php echo date('Y-m-d'); ?>
                    </h3>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-wrap gap-3 mb-3">
                        <div class="text-center pb-3 flex-fill border rounded">
                            <p class="mycard py-3 bg-danger text-white">Available Date</p>
                            <h6 class="p-3"><?php echo date('Y-m-d'); ?></h6>
                        </div>
                        <div class="text-center pb-3 flex-fill border rounded">
                            <p class="mycard py-3 bg-danger text-white">Start Time</p>
                            <h6 class="p-3">09:00 AM</h6>
                        </div>
                        <div class="text-center pb-3 flex-fill border rounded">
                            <p class="mycard py-3 bg-danger text-white">End Time</p>
                            <h6 class="p-3">11:00 AM</h6>
                        </div>

                        <div class="text-center pb-3 border rounded" style="height: 150px;">
                            <p class="mycard py-3 bg-danger text-white">Additional Notes</p>
                            <h6 class="p-3">Bring printed copies of your thesis.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>