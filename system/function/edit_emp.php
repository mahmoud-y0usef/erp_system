<?php
if (isset($_POST['edit_emp'])) {
    require_once '../../function/DB.php';
    $db = new DB();
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $reset_img = $_POST['reset_img'];
    $close_img = $_POST['close_img'];

    if ($reset_img == 1) {
        $img = 'user.png';
        $edit = $db->EditUser_img($full_name, $email, $phone, $password, $img, $id);
    }

    if ($close_img == 1) {
        $option_img = 1;
        $edit = $db->EditUser_option_img($full_name, $email, $phone, $password, $option_img, $id);
    } 

    $db->EditUser($id, $full_name, $email, $phone, $password, $option_img);

    if ($edit) {
        header('Location: ../index.php?add_emp');
        exit();
    } else {
        header('Location: ../index.php?add_emp&error');
    }

}
?>