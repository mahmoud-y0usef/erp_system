<?php 
    if(isset($_POST['add_dept']))
    {
        require_once '../../function/DB.php';
        $db = new DB();
        $deptName = $_POST['depteName'];
        $add_dept = $db->AddDept($deptName);
        
        if($add_dept)
        {
            header('Location: ../index.php?add_dept=success');
            exit();
        }
        else
        {
            header('Location: ../index.php?add_dept=error');
            exit();
        }
    }
?>