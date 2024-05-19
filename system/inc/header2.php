<?php
require_once '../function/DB.php';
$db = new DB();
$name = $db->User($_SESSION['id']['user_id']);
$full_name = $name['full_name'];
?>
