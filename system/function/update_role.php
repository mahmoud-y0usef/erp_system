<?php 

    if(isset($_POST['update_role']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $role_id = $_POST['role_id'];
        $role_name = $_POST['role_name'];
        $committee_id = $_POST['committee_id'];
        $update_role = $db->UpdateRole($role_id, $role_name, $committee_id);
        
        if($update_role)
        {
            header('Location: ../index.php?role_list&success=role_updated');
            exit();
        }
        else
        {
            header('Location: ../index.php?role_list&error=role_not_updated');
            exit();
        }
    }
?>