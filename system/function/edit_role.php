<?php 
    if(isset($_POST['edit_role'])){
        require_once '../../function/DB.php';
        $db = new DB();
        $edit = $db->EditRole($_POST['id'],$_POST['role']);
        if($edit){
            header('Location: ../index.php?admin_panel');
            exit();
        }
    }else{
        header('Location: ../index.php?admin_panel');
        exit();
    }
?>