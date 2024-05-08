<div class="sidebar_icon d-lg-none">
    <i class="ti-menu"></i>
</div>
<div class="serach_field-area">
    <div class="search_inner">
        <form action="#">
            <div class="search_field">
                <input type="text" placeholder="Search here...">
            </div>
            <button type="submit"> <img src="assets/img/icon/icon_search.svg" alt> </button>
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
        <img src="<?php echo $_SESSION['id']['img'] == 'user.png' ? 'assets/img/'.$_SESSION['id']['img']: 'assets/img/avatar/'.$_SESSION['id']['img'] ?>" alt="#">
        <div class="profile_info_iner">
            <p><?php echo $title ?></p>
            <h5><?php echo $_SESSION['id']['full_name'] ?></h5>
            <div class="profile_info_details">
                <a href="#">My Profile <i class="ti-user"></i></a>
                <a href="#">Settings <i class="ti-settings"></i></a>
                <a href="?logout">Log Out <i class="ti-shift-left"></i></a>
            </div>
        </div>
    </div>
</div>