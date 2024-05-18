<?php
$db = new DB();
$name = $db->User($_SESSION['id']['user_id']);
$role = $db->Role($_SESSION['id']['user_id']);
?>
<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name">WEJ CLUB</div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="#">
                <i class='bx bxs-info-circle'></i>
                <span class="links_name">لوحة المعلومات</span>
            </a>
            <span class="tooltip">لوحة المعلومات</span>
        </li>
        <ul class="menu">
            <li>
                <a href="#" class="dropdown-toggle">
                    <i class='bx bx-command'></i>
                    <span class="links_name">ادارة المنصة</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Dropdown Item 1</a></li>
                    <li><a href="#">Dropdown Item 2</a></li>
                    <li><a href="#">Dropdown Item 3</a></li>
                </ul>
            </li>
        </ul>
        <li>
            <a href="#">
                <i class='bx bx-stats'></i>
                <span class="links_name">الاحصائيات</span>
            </a>
            <span class="tooltip">الاحصائيات</span>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-file'></i>
                <span class="links_name">ادارة الملفات</span>
            </a>
            <span class="tooltip">ادارة الملفات</span>
        </li>
    </ul>
    <div class="content">
        <div class="user">
            <div class="user_details">
                <img decoding="async" src="assets/img/avatar/<?= $name['img'] ?>" alt="">
                <div class="name_job">
                    <div class="name"><?= $name['full_name'] ?></div>
                    <div class="job"><?= $role['name'] ?></div>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out"></i>
        </div>
    </div>
</div>