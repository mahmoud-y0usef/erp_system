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
    <div class="content">
        <div class="user">
            <div class="user_details">
                <img decoding="async" src="assets/img/avatar/<?= $name['img'] ?>" alt="">
            </div>
            <div class="name_job">
                <div class="name"><?= $name['full_name'] ?></div>
                <div class="job">🟢 <span class="job_name_"><?= $role['name'] ?></span></div>
            </div>

        </div>
    </div>
    <div class="lis">


        <ul class="nav_list">
            <?php if ($role['role_id'] == 14): ?>
                <li>
                    <a href="#">
                        <i class='bx bxs-info-circle'></i>
                        <span class="links_name">لوحة المعلومات</span>
                    </a>
                    <span class="tooltip">لوحة المعلومات</span>
                </li>

                <ul class="drob_menu">
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class='bx bx-cog'></i>
                            <span class="links_name">إعدادات المنصة</span>
                        </a>
                    </li>
                    <ul class="toggle-menu">
                        <li class="top-menu">
                            <a href="#" class="dropdown-toggle">
                                <i class='bx bx-add-to-queue'></i>
                                <span class="links_name">Roles</span>
                            </a>
                            <span class="tooltip">Roles</span>
                        </li>
                        <ul class="toggle-menu sub">
                            <li>
                                <a href="?add_role">
                                    <i class='bx bx-add-to-queue'></i>
                                    <span class="links_name">Add Role</span>
                                </a>
                                <span class="tooltip">Add Role</span>
                            </li>
                            <li>
                                <a href="?role_list">
                                    <i class='bx bx-list-ul'></i>
                                    <span class="links_name">Role List</span>
                                </a>
                                <span class="tooltip">Role List</span>
                            </li>
                            <li>
                                <a href="?user_asign_role">
                                    <i class='bx bx-user-check'></i>
                                    <span class="links_name">User Asign Role</span>
                                </a>
                                <span class="tooltip">User Asign Role</span>
                            </li>
                        </ul>
                        <li class="top-menu">
                            <a href="#" class="dropdown-toggle">
                                <i class='bx bx-add-to-queue'></i>
                                <span class="links_name">Dept</span>
                            </a>
                            <span class="tooltip">Dept</span>
                        </li>
                        <ul class="toggle-menu sub">
                            <li>
                                <a href="?add_dept">
                                    <i class='bx bx-add-to-queue'></i>
                                    <span class="links_name">Add Dept</span>
                                </a>
                                <span class="tooltip">Add Dept</span>
                            </li>
                            <li>
                                <a href="?dept_list">
                                    <i class='bx bx-list-ul'></i>
                                    <span class="links_name">Dept List</span>
                                </a>
                                <span class="tooltip">Dept List</span>
                            </li>
                            <li>
                                <a href="?user_asign_dept">
                                    <i class='bx bx-user-check'></i>
                                    <span class="links_name">User Asign Dept</span>
                                </a>
                                <span class="tooltip">User Asign Dept</span>
                            </li>
                        </ul>
                    </ul>




                </ul>

                <ul class="drob_menu">
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class='bx bxs-user' ></i>
                            <span class="links_name">المستخدمين</span>
                        </a>
                    </li>
                    <ul class="toggle-menu">
                        <li>
                            <a href="?add_user">
                                <i class='bx bx-user-plus'></i>
                                <span class="links_name">إضافة مستخدم</span>
                            </a>
                            <span class="tooltip">إضافة مستخدم</span>
                        </li>
                        
                        <li>
                            <a href="?user_list">
                                <i class='bx bxs-user-account' ></i>
                                <span class="links_name">إدارة المستخدمين</span>
                            </a>
                            <span class="tooltip">إدارة المستخدمين</span>
                        </li>
                        
                    </ul>




                </ul>
                <li>
                    <a href="#">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">الرسائل</span>
                    </a>
                    <span class="tooltip">الرسائل</span>
                </li>
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
            <?php endif; ?>
        </ul>
    </div>

</div>

<script>
    document.querySelectorAll('.dropdown-toggle').forEach(function (dropdown) {
        dropdown.addEventListener('click', function (e) {
            e.preventDefault();
            let toggleMenu = dropdown.parentElement.nextElementSibling;
            toggleMenu.classList.toggle('active');
        });
    });
</script>