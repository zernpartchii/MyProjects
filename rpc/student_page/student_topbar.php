<style>
.navbar,
.user {
    background-color: #B22222;
}
</style>

<!-- topbar for form  -->
<nav class="navbar navbar-expand-lg navbar-dark border-bottom shadow fixed-top">
    <div class="container-fluid">
        <div class="w-100 d-flex align-items-center">
            <button class="btn toggle_btn1 text-white" onclick="myFunction()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="./student_submissionSched.php"
                class="align-middle navbar-brand me-auto fs-5 text-uppercase text-white">
                <img class="logo img-fluid mx-2" src="../img/favicon.png" alt="um-logo" width="50">Research
                And Publication Center</a>
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn user text-white dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <!-- <?php echo htmlspecialchars($_SESSION["first_name"]) . ' ' . htmlspecialchars($_SESSION["last_name"]); ?> -->
                    <span class="bi bi-person-fill text-white fs-6 ms-2 pb-1"></span></a>
                </button>
                <ul class="dropdown-menu dropdown-menu-end w-100">
                    <li><a class="dropdown-item" href="./student_account.php">
                            <i class="bi bi-person"></i> Account</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../logout.php">
                            <i class="bi bi-box-arrow-right"></i> Logout</a></li>
                </ul>
            </div>
            <button class="btn toggle_btn text-white" onclick="myFunction()">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>