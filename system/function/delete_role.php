<?php 
    if(isset($_POST['delete_role']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $role_id = $_POST['role_id'];
        $delete_role = $db->DeleteRole($role_id);
        
        if($delete_role)
        {
            header('Location: ../index.php?role_list&success=role_deleted');
            exit();
        }
        else
        {
            header('Location: ../index.php?role_list&error=role_not_deleted');
            exit();
        }
    }
?>