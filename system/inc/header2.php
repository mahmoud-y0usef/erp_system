<?php
require_once '../function/DB.php';
$db = new DB();
$name = $db->User($_SESSION['id']['user_id']);
$full_name = $name['full_name'];
?>
<div class="sidebar_icon d-lg-none">
    <i class="ti-menu"></i>
</div>
<div class="serach_field-area">
    <div class="search_inner">
        <form action="#">

        </form>
    </div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
    <div class="header_notification_warp d-flex align-items-center">
        <li>
            <a href="#"> <img src="assets/img/icon/bell.svg" alt> </a>
        </li>
        <li>
            <a href="#"> <img src="assets/img/icon/msg.svg" alt> </a>
        </li>
    </div>
    <div class="profile_info">
        <img src="assets/img/avatar/<?php echo $db->User($_SESSION['id']['user_id'])['img']; ?>" alt="#">
        <div class="profile_info_iner">
            <p><?php echo $title['name'] ?></p>
            <h5><?php echo $full_name ?></h5>
            <div class="profile_info_details">
                <a href="?profile">My Profile <i class="ti-user"></i></a>
                <a href="?logout">Log Out <i class="ti-shift-left"></i></a>
            </div>
        </div>
    </div>
</div>