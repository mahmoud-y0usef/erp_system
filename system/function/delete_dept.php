<?php 
    if(isset($_POST['delete_dept']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $dept_id = $_POST['dept_id'];
        $delete_dept = $db->DeleteDept($dept_id);
        
        if($delete_dept)
        {
            header('Location: ../index.php?dept_list&success=dept_deleted');
            exit();
        }
        else
        {
            header('Location: ../index.php?dept_list&error=dept_not_deleted');
            exit();
        }
    }
?>