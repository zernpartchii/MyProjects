<!DOCTYPE html>
<html lang="en">

<head>

    <!-- header -->
    <?php include('includes/header.php'); ?>

    <!-- title -->
    <title>RESEARCH & PUBLICATION CENTER</title>

</head>

<body class="bg-light">

    <!-- topbar for form -->
    <?php

    // Initialize the session
    session_start();

    include('includes/topbarForm.php');

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: dashboard.php");
        exit;
    }
    ?>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container row mt-3">
            <div class="col-md-7 order-md-2 order-sm-1 d-flex justify-content-center align-items-center">
                <form action="#">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-body">
                            <p class="fs-2">Request an Account</p>
                            <p>Please fill in your credentials to create your account</p>
                        </div>
                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <div class="flex-fill">
                                    <label for="view_group_no" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="view_group_no" required>
                                </div>
                                <div class="flex-fill">
                                    <label for="selectZone" class="form-label">Zone</label>
                                    <select class="form-select" id="selectZone" name="selectZone"
                                        onchange="my_fun(this.value)" required>
                                        <option value="" selected hidden>-- </option>
                                        <?php
                                        $sql = "SELECT * FROM `zone`";
                                        $result1 = mysqli_query($con, $sql);
                                        while ($row = $result1->fetch_assoc()) { ?>
                                            <option value="<?php echo $row["id"]; ?>"><?php echo $row["Zone"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <script>
                                    function my_fun(str) {
                                        if (window.XMLHttpRequest) {
                                            xmlhttp = new XMLHttpRequest();
                                        } else {
                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                        }

                                        xmlhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                                document.getElementById('program').innerHTML = this.responseText;
                                            }
                                        }
                                        xmlhttp.open("GET", "includes/dropdown_reports.php?value=" + str, true);
                                        xmlhttp.send();
                                    }
                                </script>
                                <div id="program" class="flex-fill">
                                    <label for="selectProgram" class="form-label">Program</label>
                                    <select class="form-select" id="selectProgram" name="selectProgram" required>
                                        <option value="" selected hidden>-- </option>
                                        <?php include 'includes/dropdown_reports.php'; ?>
                                        <option disabled>...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex-fill mb-4">
                                <label for="view_title" class="form-label">Title</label>
                                <textarea id="view_title" cols="30" rows="3" class="form-control fw-normal"
                                    required></textarea>
                            </div>

                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <div class="flex-fill">
                                    <label for="view_proponent_1">Member 1</label>
                                    <input type="text" class="form-control" name="view_proponent_1" required>
                                </div>
                                <div class="flex-fill">
                                    <label for="view_proponent_2">Member 2</label>
                                    <input type="text" class="form-control" name="view_proponent_2">
                                </div>
                                <div class="flex-fill">
                                    <label for="view_proponent_3">Member 3</label>
                                    <input type="text" class="form-control" name="view_proponent_3">
                                </div>
                            </div>

                            <div class="d-flex flex-wrap gap-3 mb-4">
                                <div class="flex-fill">
                                    <label for="view_adviser" class="form-label">Adviser</label>
                                    <input type="text" class="form-control" name="view_adviser" required>
                                </div>
                                <div class="flex-fill">
                                    <label for="view_stat" class="form-label">Stat/DA</label>
                                    <input type="text" class="form-control" name="view_stat">
                                </div>
                                <div id="SY" class="flex-fill">
                                    <label for="selectSY" class="form-label">School Year</label>
                                    <select class="form-select" id="selectSY" name="selectSY" required>
                                        <option value="" selected hidden>-- </option>
                                        <?php
                                        $sql = "SELECT DISTINCT(S_Y) FROM `research_information` ORDER BY S_Y DESC";
                                        $result = mysqli_query($con, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?= $row['S_Y']; ?>"><?= $row['S_Y']; ?></option>
                                        <?php
                                        }
                                        ?>
                                        <option disabled>...</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer bg-body d-flex">
                            <button type="submit" class="btn btn-md btn-danger ms-auto">
                                <i class="bi-arrow-right"></i> Submit Request</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- include welcome page -->
            <div class="col-md-5 order-md-1 order-sm-2 d-flex justify-content-center align-items-center">
                <div class="card border-0 bg-light mb-3">
                    <div class="card-body">
                        <div class="ps-2">
                            <h1>Welcome to <span class="text-danger">UM</span></h1>
                            <p class="fs-3">The first in leadership education</p>
                        </div>
                        <div class="mt-3">
                            <img class="img-fluid" src="img/logo-transparent.png" alt="" width="600px">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>