<style>
.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    padding-top: 100px;
    padding-left: 4px;
    transition: 0.5s;
    background-color: #fff;
    overflow-x: hidden;
    /* border-radius: 5px; */
    /* background-color: rgb(251, 251, 251); */
}

li:hover {
    background-color: #eee;
    color: #B22222;
    border-radius: 5px;
    /* transition: .3s; */
}

.icon {
    color: #B22222;
}

#main {
    margin-top: 67px;
    background-color: #fff;
    margin-left: 250px;
    transition: margin-left .5s;
}

.um_Side_Logo {
    width: 90%;
    padding-top: 10px;
}

.toggle_btn {
    display: none;
}

.sidebar_hidden {
    visibility: hidden;
}

@media (max-width:900px) {
    .text-nav {
        margin-left: 8px;
    }

    .sidenav {
        width: 73px;
    }

    #main {
        margin-left: 73px;
        transition: margin-left .5s;
    }

    .toggle_btn {
        display: inline;
    }

    .toggle_btn1 {
        display: none;
    }

    .user {
        display: none;
    }

    .logo {
        margin-right: auto;
    }

    .sidebar_hidden {
        visibility: visible;
    }


    @media (max-height: 484px) {
        .text-nav {
            margin-left: 8px;
        }

        .sidenav {
            width: 90px;
        }

        #main {
            margin-left: 90px;
            transition: margin-left .5s;
        }


    }

    @media (max-width:500px) {
        .sidenav {
            width: 0;
        }

        #main {
            margin-left: 0;
            transition: margin-left .5s;
        }

    }
}
</style>

<script>
function myFunction() {
    var x = document.getElementById("mySidenav");
    if (x.className === "sidenav") {
        x.className += " responsive";
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    } else {
        x.className = "sidenav";
        document.getElementById("mySidenav").style.width = "0px";
        document.getElementById("main").style.marginLeft = "0px";
    }
}
</script>

<!-- Start Sidebar Header -->
<div id="mySidenav" class="sidenav m-0 bg-light">
    <ul class="px-0">
        <div class="d-none w-100 text-center mb-4">
            <img class="side-logo img-fluid" src="../img/logo-transparent.png" alt="um-logo" width="200">
        </div>
        <li class="w-100 umv px-2 my-1 d-flex align-items-center">
            <span class="active1 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-grid-fill icon fs-5 hover
            d-flex align-items-center" href="./student_vmv.php">
                <span class="text-dark active-nav1 ms-4 fs-5 text-nowrap">UM - VMV</span></a>
        </li>
        <li class="w-100 px-2 my-1 d-flex align-items-center">
            <span class="active4 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-calendar-fill icon fs-5 hover
            d-flex align-items-center" href="./student_submissionSched.php">
                <span class="text-dark active-nav4 ms-4 fs-5">Submission Schedule</span></a>
        </li>
        <li class="w-100 px-2 my-1 d-flex align-items-center">
            <span class="active5 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-bar-chart-fill icon fs-5 hover
            d-flex align-items-center" href="./student_thesis.php">
                <span class="text-dark active-nav5 ms-4 fs-5">Thesis Status</span></a>
        </li>
        <li class="w-100 about px-2 my-1 d-flex align-items-center">
            <span class="active6 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-info-circle-fill icon fs-5 hover
            d-flex align-items-center" href="./student_about.php">
                <span class="text-dark active-nav6 ms-4 fs-5 text-nowrap">About Us</span></a>
        </li>
        <li class="w-100 account px-2 my-1 sidebar_hidden d-flex align-items-center">
            <span class="active7 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-person-fill icon fs-5 hover
            d-flex align-items-center" href="./student_account.php">
                <span class="text-dark active-nav7 ms-4 fs-5">Account</span></a>
        </li>
        <li class="w-100 px-2 my-1 sidebar_hidden d-flex align-items-center">
            <span class="active8 py-4"></span>
            <a class="nav-link text-nav ps-2 py-2 w-100 bi bi-box-arrow-right icon fs-5 hover
            d-flex align-items-center" href="../logout.php">
                <span class="text-dark active-nav8 ms-4 fs-5">Logout</span></a>
        </li>
    </ul>
</div>

<!-- End Sidebar Body -->