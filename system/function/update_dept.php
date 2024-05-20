<?php 

    if(isset($_POST['update_dept']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
    
        $update_dept = $db->Updatedept($dept_id, $dept_name);
        
        if($update_dept)
        {
            header('Location: ../index.php?dept_list&success=dept_updated');
            exit();
        }
        else
        {
            header('Location: ../index.php?dept_list&error=dept_not_updated');
            exit();
        }
    }
?>