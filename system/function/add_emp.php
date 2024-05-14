<?php 
    if (isset($_POST['add_emp']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $id_number = $_POST['id_number'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $dept = $_POST['dept'];
        $role = $_POST['role'];
        $add = $db->AddUser($id_number, $full_name, $email, $phone, $password, $role , $dept);
        if ($add)
        {
            header('Location: ../index.php?add_emp');
            exit();
        }
        else
        {
            header('Location: ../index.php?add_emp&error');
        }
    }
?>