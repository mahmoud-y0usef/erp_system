<?php
if (isset($_POST['add_user'])) {
    require_once '../../function/DB.php';
    $db = new DB();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $dept_id = $_POST['dept']; // Use dept_id to avoid confusion
    $role_id = $_POST['position']; // Use role_id to avoid confusion

    $add = $db->Add_User($name, $email, $password, $address, $id, $dept_id, $role_id);
    if ($add) {
        header('Location: ../index.php?add_user=success');
        exit();
    } else {
        header('Location: ../index.php?add_user=error');
        exit();
        // error_reporting(E_ALL);
        // ini_set('display_errors', 'On');
        
    }
}
?>