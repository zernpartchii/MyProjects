<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <!-- header -->
    <?php include('includes/header.php'); ?>

    <!-- title -->
    <title>Pending Request - RESEARCH & PUBLICATION CENTER</title>
</head>

<body>

    <?php

    ob_start();
    // Initialize the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != false) {

        // Check if the user is logged in, if not then redirect him to login page
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            header("location: ../rpc/index.php");
            exit;
        }
    }

    ?>

    <!-- include Sidebar  -->
    <?php include('includes/sidebar.php') ?>

    <style>
        .active3 {
            background-color: #B22222;
            width: 6px;
            height: 25px;
        }

        .pending {
            background-color: rgb(255, 245, 200);
            color: #B22222;
            border-radius: 5px;
        }
    </style>

    <div class="content p-0" id="main">
        <!-- include Topbar -->
        <?php include('includes/topBar.php') ?>

        <!-- include manage research -->
        <?php include('admin_page/pendingRequest_content.php') ?>
    </div>

</body>

</html>