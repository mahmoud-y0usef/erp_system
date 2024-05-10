<div class="logo d-flex justify-content-between">
    <a href="index-2.html"><img src="assets/img/club-logo.png" alt></a>
    <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
    </div>
</div>

<?php
$role = $db->Role($_SESSION['id']['user_id']);
$department = $db->Dept($_SESSION['id']['dept']);
$deb = [$db->DebShow(1), $db->DebShow(2), $db->DebShow(3), $db->DebShow(4), $db->DebShow(5), $db->DebShow(6), $db->DebShow(7), $db->DebShow(8), $db->DebShow(9), $db->DebShow(10), $db->DebShow(11), $db->DebShow(12), $db->DebShow(13), $db->DebShow(14), $db->DebShow(15), $db->DebShow(16), $db->DebShow(17), $db->DebShow(18), $db->DebShow(19), $db->DebShow(20), $db->DebShow(21), $db->DebShow(22), $db->DebShow(23), $db->DebShow(24), $db->DebShow(25), $db->DebShow(26), $db->DebShow(27), $db->DebShow(28), $db->DebShow(29)];
?>
<?php if ($role['role_id'] == 14 || $department): ?>
    <ul id="sidebar_menu">
        <?php if ($role['role_id'] == 6 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[0] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($role['role_id'] == 7 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[1] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($role['role_id'] == 8 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[2] ?></span>
                </a>
                <ul>
                    <li><a href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($role['role_id'] == 9 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[3] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($role['role_id'] == 10 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[4] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
        <?php if ($role['role_id'] == 11 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[5] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <?php if ($department == 7 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[6] ?></span>
                </a>
                
                <ul class="inner">
                    <!-- جودو -->
                    <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 28 || $role['role_id'] == 29): ?>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[15] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    <?php endif; ?>
                    <!-- كراتيه -->
                    <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 30 || $role['role_id'] == 31): ?>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[16] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
       

    </ul>

<?php endif; ?>