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

        li:nth-child(2) {
            background-color: rgb(255, 245, 200);
            color: #B22222;
            border-radius: 5px;
        }
    </style>

    <div class="content p-0" id="main">

        <!-- include Topbar -->
        <?php include('./student_topbar.php') ?>

        <div class="col-12 col-lg-0">
            <img alt="UM VMV" src="https://umtc.umindanao.edu.ph/images/um_vmv.jpg" class="img-fluid">
        </div>


    </div>

</body>

</html>