<?php
if (isset($_POST['update_user'])) {
    require_once '../../function/DB.php';
    $db = new DB();
    $id = $_POST['user_id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $reset_img = isset($_POST['reset']) ? 1 : 0;
    $close_img = isset($_POST['lock']) ? 1 : 0;

    if ($reset_img == 1) {
        $img = 'user.png';
        $edit = $db->EditUser_img($email, $password, $img, $id);
    } else {
        $edit = true;
    }

    if ($close_img == 1) {
        $option_img = 1;
        $edit = $db->EditUser_option_img($email, $password, $option_img, $id);
    } else {
        $option_img = 0;
        $db->EditUser($id, $email, $password, $option_img);
    }

    if ($edit) {
        header('Location: ../index.php?user_list&success=user_updated');
        exit();
    } else {
        header('Location: ../index.php?user_list&error=user_not_updated');
        exit();
    }
}
?>
