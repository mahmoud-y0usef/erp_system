<?php 
    require_once 'DB.php';
    $db = new DB();

    if (isset($_POST['email'])  && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            header('Location: ../index.php?error=emptyfields');
            exit();
        }

        $login = $db->Login($email , $password);
        if($login){
            $statue = $db->Statue($_SESSION['id']['user_id']);
           header('Location: ../system/');
           exit();
        }else{
            header('Location: ../index.php?error=wrongdata');
            exit();
        }
    }
?>