<?php 
    if(isset($_POST['update_role']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $userId = $_POST['user_id'];
        $newRole = $_POST['new_role'];

        $result = $db->EditUserRole($userId, $newRole);
        if($result)
        {
            header('Location: ../index.php?user_asign_role&success');
            exit();
        }
        else
        {
            header('Location: ../index.php?user_asign_role&error');
            exit();
        }

    }
?>