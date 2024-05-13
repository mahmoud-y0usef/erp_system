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

    if ($reset_img == 1) {
        $img = 'user.png';
        $edit = $db->EditUser_img($full_name, $email, $phone, $password, $img, $id);
    }

    $edit = $db->EditUser($id, $full_name, $email, $phone, $password);


    if ($edit) {
        header('Location: ../index.php?add_emp');
        exit();
    } else {
        header('Location: ../index.php?add_emp&error');
    }

}
?>