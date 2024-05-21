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

    <link rel="stylesheet" href="assets/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="assets/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="assets/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="assets/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="assets/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="assets/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="assets/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="assets/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="assets/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="assets/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="assets/vendors/morris/morris.css">

    <link rel="stylesheet" href="assets/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="assets/css/metisMenu.css">

    <link rel="stylesheet" href="assets/css/style1.css" />
    <link rel="stylesheet" href="assets/css/colors/default.css" id="colorSkinCSS">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.2.0/css/pro.min.css" rel="stylesheet">
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
            <span ><i class="fa-sharp fa-regular fa-waveform-lines"></i></span>
        </div>

    </div>
    <!-- Loader end-->