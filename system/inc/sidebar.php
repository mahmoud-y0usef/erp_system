<div class="logo d-flex justify-content-between">
    <a href="index.php"><img src="assets/img/club-logo.png" alt></a>
    <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
    </div>
</div>

<?php

$role = $db->Role($_SESSION['id']['user_id']);
$deb = [$db->DebShow(1), $db->DebShow(2), $db->DebShow(3), $db->DebShow(4), $db->DebShow(5), $db->DebShow(6), $db->DebShow(7), $db->DebShow(8), $db->DebShow(9), $db->DebShow(10), $db->DebShow(11), $db->DebShow(12), $db->DebShow(13), $db->DebShow(14), $db->DebShow(15), $db->DebShow(16), $db->DebShow(17), $db->DebShow(18), $db->DebShow(19), $db->DebShow(20), $db->DebShow(21), $db->DebShow(22), $db->DebShow(23), $db->DebShow(24), $db->DebShow(25), $db->DebShow(26), $db->DebShow(27), $db->DebShow(28), $db->DebShow(29)];
$department = $db->Dept($_SESSION['id']['dept']);
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


                <!-- جودو -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 28 || $role['role_id'] == 29): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[15] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>
                <!-- كراتيه -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 30 || $role['role_id'] == 31): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[16] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- السباجة -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 32 || $role['role_id'] == 33): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[17] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- رفع الاثقال -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 34 || $role['role_id'] == 35): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[19] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- الريشة -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 36 || $role['role_id'] == 37): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[18] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- بلياردو وسنوكر -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 38 || $role['role_id'] == 39): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[21] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- الالعاب الالكترونية -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 40 || $role['role_id'] == 41): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[22] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- كرة الماء -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 42 || $role['role_id'] == 43): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[23] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- كرة السلة -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 44 || $role['role_id'] == 45): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[24] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- كرة اليد -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 46 || $role['role_id'] == 47): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[25] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- المبارزة-->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 48 || $role['role_id'] == 49): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[26] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- البادل -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 50 || $role['role_id'] == 51): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[27] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- العاب القوى -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 52 || $role['role_id'] == 53): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[28] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

                <!-- تايكنوندو -->
                <?php if ($role['role_id'] == 12 || $role['role_id'] == 14 || $role['role_id'] == 54 || $role['role_id'] == 55): ?>
                    <ul class="inner">
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <i></i>
                            <span><?php echo $deb[20] ?></span>
                        </a>
                        <ul>
                            <li><a class="active" href="#">test1</a></li>
                            <li><a href="#">test2</a></li>
                        </ul>
                    </ul>
                <?php endif; ?>

            </li>
        <?php endif; ?>

        <!-- ادارة كرة القدم -->
        <!-- الرئيس التنفيذي للكرة القدم -->
        <?php if ($department == 8 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[7] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- ادارة تقنية المعلومات -->
        <!-- مدير ادارة تقنية المعلومات -->
        <?php if ($department == 9 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[8] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">الطلبات</a></li>
                    <li><a href="?admin_panel">Admin Panel</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- إدارة العلاقات العامة -->
        <!-- مدير إدارة العلاقات العامة -->
        <?php if ($department == 10 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[9] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- إدارة الإعلام والتواصل المجتمعي -->
        <!-- مدير إدارة الإعلام والتواصل المجتمعي -->
        <?php if ($department == 11 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[10] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- الادارة المالية -->
        <!-- المدير المالي -->
        <?php if ($department == 12 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[11] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- إدارة الموارد البشرية -->
        <!-- مدير إدارة الموارد البشرية -->
        <?php if ($department == 13 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[12] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- إدارة الحوكمة والامتثال والمخاطر -->
        <!-- مدير إدارة الحوكمة والامتثال والمخاطر -->
        <?php if ($department == 14 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[13] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- الإدارة القانونية -->
        <!-- المدير القانوني -->
        <?php if ($department == 15 || $role['role_id'] == 14): ?>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i></i>
                    <span><?php echo $deb[14] ?></span>
                </a>
                <ul>
                    <li><a class="active" href="#">test1</a></li>
                    <li><a href="#">test2</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>

<?php endif; ?>