<?php 
    if(isset($_POST['add_role']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $roleName = $_POST['roleName'];
        $roleStatus = $_POST['roleStatus'];
        $add_role = $db->AddRole($roleName, $roleStatus);
        if($add_role)
        {
            header('Location: ../index.php?add_role=success');
            exit();
        }
        else
        {
            header('Location: ../index.php?add_role=error');
            exit();
        }
    }
?>