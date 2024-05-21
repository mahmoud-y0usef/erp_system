<?php 
    if(isset($_POST['delete_user'])){
        require_once '../../function/DB.php';
        $db = new DB();
        $id = $_POST['user_id'];
        $del = $db->DelUser($id);
        if($del){
            header('Location: ../index.php?user_list&success=user_deleted');
            exit();
        }else{
            header('Location: ../index.php?user_list&error=user_not_deleted');
        }
    }
?>