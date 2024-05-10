<div class="logo d-flex justify-content-between">
    <a href="index-2.html"><img src="assets/img/club-logo.png" alt></a>
    <div class="sidebar_close_icon d-lg-none">
        <i class="ti-close"></i>
    </div>
</div>

<?php
$role = $db->Role($_SESSION['id']['user_id']);
$deb = [$db->DebShow(1), $db->DebShow(2), $db->DebShow(3), $db->DebShow(4), $db->DebShow(5), $db->DebShow(6), $db->DebShow(7), $db->DebShow(8), $db->DebShow(9), $db->DebShow(10), $db->DebShow(11), $db->DebShow(12), $db->DebShow(13), $db->DebShow(14), $db->DebShow(15)];


?>
<?php if ($role['role_id'] == 14): ?>
    <ul id="sidebar_menu">
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
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[2] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
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
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[6] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
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
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[8] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
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

    </ul>

<?php endif; ?>


<!-- قسم المشتريات -->
<?php if ($role['role_id'] == 7): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- ادارة الفعاليات -->
<?php if ($role['role_id'] == 8): ?>
    <ul id="sidebar_menu">
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[2] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
    </ul>
<?php endif; ?>

<!-- إدارة المسؤولية الاجتماعية -->
<?php if ($role['role_id'] == 9): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- إدارة التسويق -->
<?php if ($role['role_id'] == 10): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- ادارة الاستثمار -->
<?php if ($role['role_id'] == 11): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- ادارة الالعاب المختلفة -->
<?php if ($role['role_id'] == 12): ?>
    <ul id="sidebar_menu">
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[6] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
    </ul>
<?php endif; ?>

<!-- إدارة كرة القدم -->
<?php if ($role['role_id'] == 13): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- ادارة تقنية المعلومات -->
<?php if ($role['role_id'] == 14): ?>
    <ul id="sidebar_menu">
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $deb[8] ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
    </ul>
<?php endif; ?>

<!-- إدارة العلاقات العامة -->
<?php if ($role['role_id'] == 15): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- إدارة الإعلام والتواصل المجتمعي -->

<?php if ($role['role_id'] == 16): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- الادارة المالية -->
<!-- المدير المالي -->
<?php if ($role['role_id'] == 17): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>
<!-- محاسب -->
<?php if ($role['role_id'] == 21): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- إدارة الموارد البشرية -->
<?php if ($role['role_id'] == 18): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- إدارة الحوكمة والامتثال والمخاطر -->
<?php if ($role['role_id'] == 19): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>

<!-- الادارة القانونية -->
<?php if ($role['role_id'] == 20): ?>
    <ul id="sidebar_menu">
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
    </ul>
<?php endif; ?>