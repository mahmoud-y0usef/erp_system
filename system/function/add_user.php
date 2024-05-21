<?php
if (isset($_POST['add_user'])) {
    require_once '../../function/DB.php';
    $db = new DB();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $id = $_POST['id'];

    $add = $db->Add_User($name, $email, $password, $address, $id);
    if ($add) {

        header('Location: ../index.php?add_user=success');
        exit();
    } else {
        header('Location: ../index.php?add_user=error');
        exit();

    }

}
?>