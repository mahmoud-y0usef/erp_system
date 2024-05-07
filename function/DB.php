<?php 
class DB {
    private function Connection(){
        $HOST = "localhost";
        $USER = "root";
        $PASS = "";
        $DBNAME = "erp_system";
        $DB = new mysqli($HOST , $USER  , $PASS  , $DBNAME);
        if ($DB->connect_errno) {
            echo "". $DB->connect_error;
            exit();
        }
        return $DB; 
    }

    public function Login($email , $password){
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' limit 1";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["password"] == $password && $row["email"] == $email) {
                session_start();
                $_SESSION['id'] = $row;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }

    }    
?>