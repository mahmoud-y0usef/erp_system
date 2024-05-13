<?php 
    if(isset($_POST['del_emp'])){
        require_once '../../function/DB.php';
        $db = new DB();
        $id = $_POST['id'];
        $del = $db->DelUser($id);
        if($del){
            header('Location: ../index.php?add_emp');
            exit();
        }else{
            header('Location: ../index.php?add_emp&error');
        }
    }
?>