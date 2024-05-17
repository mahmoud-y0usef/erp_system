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
<div class="container drob">
    <div class="dropdown" style="background-color:#0b0d24;width: 114px;">
        <button style="color:white;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">النماذج
            <span class="caret"></span></button>
        <ul style="padding: 15px;background-color:#0b0d24" class="dropdown-menu">
            <li class="dropdown-submenu ">
                
                <a class="test" tabindex="-1" href="#">تقنية المعلومات <span class="caret"></span></a>
                <ul style="padding: 15px;background-color:#212529" class="dropdown-menu">
                    <li><a tabindex="-1" href="#">طلب خدمة تقنية</a></li>
                    
                </ul>
            </li>
            <li class="dropdown-submenu ">
                
                <a class="test" tabindex="-1" href="#">الموارد البشرية<span class="caret"></span></a>
                <ul style="padding: 15px;background-color:#212529" class="dropdown-menu">
                    <li><a tabindex="-1" href="#">طلب إذن</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <div class="dropdown" style="background-color:#0b0d24;width: 114px;">
        <button style="color:white;" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">معلومات عنا
            <span class="caret"></span></button>
        <ul style="padding: 15px;background-color:#0b0d24" class="dropdown-menu">
            <li class="dropdown-submenu ">
                
                <a class="test" tabindex="-1" href="#">تواصل<span class="caret"></span></a>
                <ul style="padding: 15px;background-color:#212529" class="dropdown-menu">
                    <li><a tabindex="-1" href="#">test1</a></li>
                    
                </ul>
            </li>
            <li class="dropdown-submenu ">
                
                <a class="test" tabindex="-1" href="#">حول<span class="caret"></span></a>
                <ul style="padding: 15px;background-color:#212529" class="dropdown-menu">
                    <li><a tabindex="-1" href="#">test1</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>
