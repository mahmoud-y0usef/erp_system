<?php
session_start(); // Start the session at the beginning of the script

if (isset($_POST['edit_profile'])) {
    require_once '../../function/DB.php';
    $db = new DB();

    // Sanitize inputs
    $id = $_SESSION['id']['user_id'];
    $full_name = htmlspecialchars($_POST['full_name']); // Sanitize user input

    if (!empty($_FILES['logo']['name'])) { // Check if a logo file is uploaded
        $logo = $_FILES['logo']['name'];
        $tmp_name = $_FILES['logo']['tmp_name'];
        $path = '../assets/img/avatar/' . $logo;
        $logo_error = $_FILES['logo']['error'];
        $logo_size = $_FILES['logo']['size'];
        $logo_type = $_FILES['logo']['type'];
        $allowed = array('jpg', 'jpeg', 'png');
        $ext = pathinfo($logo, PATHINFO_EXTENSION);

        // Validate file extension
        if (!in_array($ext, $allowed)) {
            header('Location: ../?profile&error=invalid');
            exit();
        }
        
        // Validate file size
        if ($logo_error === 0 && $logo_size > 500000) {
            header('Location: ../?profile&error=size');
            exit();
        }

        // Move uploaded file
        if (move_uploaded_file($tmp_name, $path)) {
            $update = $db->UpdateProfile($id, $full_name, $logo);
            if ($update) {
                header('Location: ../?profile&success');
                exit();
            } else {
                header('Location: ../?profile&error=failed');
                exit();
            }
        } else {
            header('Location: ../?profile&error=upload');
            exit();
        }
    } else { // If no logo is uploaded
        $logo = $db->User($_SESSION['id']['user_id'])['img'];
        $update = $db->UpdateProfile($id, $full_name, $logo);
        if ($update) {
            header('Location: ../?profile&success');
            exit();
        } else {
            header('Location: ../?profile&error=failed');
            exit();
        }
    }
}
?>
