<?php 
    if(isset($_POST['update_dept']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $userId = $_POST['user_id'];
        $newRole = $_POST['new_dept'];

        $result = $db->EditUserDept($userId, $newRole);
        if($result)
        {
            header('Location: ../index.php?user_asign_dept&success');
            exit();
        }
        else
        {
            header('Location: ../index.php?user_asign_dept&error');
            exit();
        }

    }
?>