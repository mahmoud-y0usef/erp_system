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


<?php
// Define an associative array to map role_id to sidebar menu titles
$sidebar_menus = array(
    7 => $deb[1],   // قسم المشتريات
    8 => $deb[2],   // ادارة الفعاليات
    9 => $deb[3],   // إدارة المسؤولية الاجتماعية
    10 => $deb[4],  // إدارة التسويق
    11 => $deb[5],  // ادارة الاستثمار
    12 => $deb[6],  // ادارة الالعاب المختلفة
    13 => $deb[7],  // إدارة كرة القدم
    14 => $deb[8],  // ادارة تقنية المعلومات
    15 => $deb[9],  // إدارة العلاقات العامة
    16 => $deb[10], // إدارة الإعلام والتواصل المجتمعي
    17 => $deb[11], // الادارة المالية (المدير المالي)
    21 => $deb[11], // الادارة المالية (المحاسب)
    18 => $deb[12], // إدارة الموارد البشرية
    19 => $deb[13], // إدارة الحوكمة والامتثال والمخاطر
    20 => $deb[14]  // الادارة القانونية
);

// Check role_id and display corresponding sidebar menu
if (isset($sidebar_menus[$role['role_id']])) {
    ?>
    <ul id="sidebar_menu">
        <li>
            <a class="has-arrow" href="#" aria-expanded="false">
                <i></i>
                <span><?php echo $sidebar_menus[$role['role_id']]; ?></span>
            </a>
            <ul>
                <li><a class="active" href="#">test1</a></li>
                <li><a href="#">test2</a></li>
            </ul>
        </li>
    </ul>
    <?php
}
?>