<!DOCTYPE html>
<html>

<head>
    <?php

    session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: ../index.php');
        exit();
    }
    require_once '../function/DB.php';

    $db = new DB();
    $title = $db->Role($_SESSION['id']['user_id']);

    if (isset($_GET['logout'])) {
        $db = new DB();
        $logout = $db->Logout($_SESSION['id']['user_id']);
        if ($logout) {
            header('Location: ../index.php');
            exit();
        }
    }
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ERP | <?php echo $title['name'] ?></title>
    <link rel="icon" href="assets/img/club-logo.png" type="image/png">

    <!-- <link rel="stylesheet" href="assets/css/bootstrap1.min.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/themefy_icon/themify-icons.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/swiper_slider/css/swiper.min.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/select2/css/select2.min.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/niceselect/css/nice-select.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/owl_carousel/css/owl.carousel.css" /> -->

    <!-- <link rel="stylesheet" href="assets/vendors/gijgo/gijgo.min.css" /> -->

    <link rel="stylesheet" href="assets/vendors/font_awesome/css/all.min.css" />
    

    <link rel="stylesheet" href="assets/css/style1.css" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
        integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* CSS for the left arrow */
        .arrow-left::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent;
            transform: rotate(90deg);


        }

        
    </style>
</head>

<body class="crm_body_bg"></body>

<!-- Loader-->
<div id="page-preloader">
    <div class="preloader-1">
        <div class="loader-text">Loading</div>
        <span><i class="fa-sharp fa-regular fa-waveform-lines"></i></span>
    </div>

</div>
<!-- Loader end-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: end;text-align:center">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">التقارير</a>
            <a class="nav-item nav-link" href="#">النماذج</a>
            <a class="nav-item nav-link" href="#">الإدارة</a>
            <a class="nav-item nav-link active" href="#">الرئيسية</a>

            <!-- Notification Dropdown -->
            <div class="nav-item dropdown">
                <a class="nav-link ico dropdown-toggle" href="#" id="navbarDropdownNotification" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i style="font-size:25px;" class='bx bxs-bell'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNotification">
                    <a class="dropdown-item" href="#">Notification 1</a>
                    <a class="dropdown-item" href="#">Notification 2</a>
                    <a class="dropdown-item" href="#">Notification 3</a>
                </div>
            </div>

            <!-- Profile Dropdown -->
            <div class="nav-item dropdown">
                <a class="nav-link ico dropdown-toggle" href="#" id="navbarDropdownProfile" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i style="font-size:25px;" class='bx bx-user-circle'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item" href="?edit_profile">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?logout">Logout</a>
                </div>
            </div>
            <a class="nav-item nav-link theme" href="#"><i class='bx bxs-moon' style="font-size:20px"></i></a>
        </div>
    </div>
</nav>
<br><br>