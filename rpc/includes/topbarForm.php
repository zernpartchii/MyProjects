<style>
    .navbar,
    .user {
        background-color: #B22222;
    }

    .active:hover {
        background-color: rgb(150, 0, 0);
        border-radius: 5px;
        padding-left: 10px;
        padding-right: 10px;
        transition: .5s;
    }
</style>
<!-- topbar for form  -->
<nav class="navbar navbar-expand-lg navbar-dark shadow sticky-top">
    <div class="container-fluid">
        <img class="img-fluid mx-auto" src="img/favicon.png" alt="um-logo" width="50">
        <a class="align-middle navbar-brand mx-auto ms-2 fs-5 text-uppercase text-white">Research and Publication
            Center</a>
        <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center ms-auto mb-2 gap-3">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php"><i class="bi-grid-fill"></i> Vision Mission Values</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php"><i class="bi-info-circle"></i> About Us</a>
                </li>
                <li class="nav-item d-flex align-items-center gap-3">
                    <a class="nav-link active" href="index.php"><i class="bi-person-fill"></i> Login</a>
                    <span class="text-white"> | </span>
                    <a class="nav-link active m-0" href="register.php">
                        Create Account
                        <p class="m-0" style="font-size: 10px;">for RPC Staff?</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>