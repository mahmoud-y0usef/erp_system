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
    <title>ERP | <?php  echo $title['name'] ?></title>
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
</head>

<body class="crm_body_bg"></body>