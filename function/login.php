<?php 
    require_once 'DB.php';
    $db = new DB();

    if (isset($_POST['email'])  && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $db->Login($email , $password);
        if($login){
           header('Location: ../system/');
        }else{
            echo "Login Failed";
        }
    }
?>