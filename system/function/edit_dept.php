<?php 
    if(isset($_POST['edit_dept'])){
        require_once '../../function/DB.php';
        $db = new DB();
        $edit = $db->EditDept($_POST['id'],$_POST['dept']);
        if($edit){
            header('Location: ../index.php?admin_panel');
            exit();
        }
    }else{
        header('Location: ../index.php?admin_panel');
        exit();
    }
?>