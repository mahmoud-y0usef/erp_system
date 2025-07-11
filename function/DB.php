<?php
class DB
{
    private function Connection()
    {
        $HOST = "localhost";
        $USER = "root";
        $PASS = "";
        $DBNAME = "erp_system";
        $DB = new mysqli($HOST, $USER, $PASS, $DBNAME);
        if ($DB->connect_errno) {
            echo "" . $DB->connect_error;
            exit();
        }
        return $DB;
    }

    public function Login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' limit 1";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["password"] == $password && $row["email"] == $email) {
                session_start();
                $_SESSION['id'] = $row;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function It_Request($id, $service, $note, $sender)
    {
        $sql = "INSERT INTO it_service_request (id, service, note, requester) VALUES ('$id', '$service', '$note', ' $sender')";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function Statue($id)
    {
        $sql = "UPDATE users SET status = 1 WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        }
    }

    public function Logout($id)
    {
        $sql = "UPDATE users SET status = 0 WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            session_start();
            session_unset();
            session_destroy();
            return true;
        } else {
            return false;
        }
    }

    public function Role($id)
    {
        $sql = "SELECT role FROM users WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sql = "SELECT * FROM role WHERE role_id = '$row[role]'";
            $result = $this->Connection()->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function DebShow($id)
    {
        $sql = "SELECT * FROM dept where id_dept = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['name'];
        } else {
            return false;
        }
    }

    public function Dept($id)
    {
        $sql = "SELECT * FROM dept where id_dept = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['id_dept'];
        } else {
            return false;
        }
    }

    public function DeptName($id)
    {
        $sql = "SELECT * FROM dept where id_dept = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['name'];
        } else {
            return false;
        }
    }

    public function RoleName($id)
    {
        $sql = "SELECT * FROM role where role_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row['name'];
        } else {
            return false;
        }
    }


    public function Roles()
    {
        $sql = "SELECT * FROM role";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function Users()
    {
        $sql = "SELECT * FROM users";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function Depts()
    {
        $sql = "SELECT * FROM dept";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function User($id)
    {
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    public function UpdateProfile($id, $full_name, $logo)
    {
        $sql = "UPDATE users SET full_name = '$full_name', img = '$logo' WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditDept($id, $name)
    {
        $sql = "UPDATE dept SET name = '$name' WHERE id_dept = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditRole($id, $name)
    {
        $sql = "UPDATE role SET name = '$name' WHERE role_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function DelUser($id)
    {
        $sql = "DELETE FROM users WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditUser_img($email, $password, $img, $id)
    {
        $sql = "UPDATE users SET  email = '$email',  password = '$password', img = '$img' WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditUser($id, $email, $password, $option_img)
    {
        $sql = "UPDATE users SET  email = '$email',  password = '$password', option_img = '$option_img' WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function EditUser_option_img($email, $password, $option_img, $id)
    {
        $sql = "UPDATE users SET  email = '$email',  password = '$password', option_img = '$option_img' WHERE user_id = '$id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function AddUser($id, $full_name, $email, $phone, $password, $role, $dept)
    {
        $sql = "INSERT INTO users (user_id , full_name, email, phone, password, role, dept) VALUES ('$id' , '$full_name', '$email', '$phone', '$password', '$role', '$dept')";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function GetAllDept()
    {
        $sql = "SELECT * FROM dept";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }
    public function GetAllRequests()
    {
        $sql = "SELECT * FROM   it_service_request";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }
    public function GetAllRole()
    {
        $sql = "SELECT * FROM role";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function GetAllCommittees()
    {
        $sql = "SELECT * FROM committees";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }


    public function AddRole($name, $committees)
    {
        // check if role already exists
        $sql = "SELECT * FROM role WHERE name = '$name'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            return false;
        } else {
            $sql = "INSERT INTO role (name, committees) VALUES ('$name', '$committees')";
            $result = $this->Connection()->query($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function AddDept($name)
    {
        // check if dept already exists
        $sql = "SELECT * FROM dept WHERE name = '$name'";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            return false;
        } else {
            $sql = "INSERT INTO dept (name) VALUES ('$name')";
            $result = $this->Connection()->query($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function GetRolePage($offset, $limit)
    {
        $sql = "SELECT * FROM role LIMIT $offset, $limit";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function GetDeptPage($offset, $limit)
    {
        $sql = "SELECT * FROM dept LIMIT $offset, $limit";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function DeleteRole($role_id)
    {
        $sql = "DELETE FROM role WHERE role_id = '$role_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function DeleteDept($dept_id)
    {
        $sql = "DELETE FROM dept WHERE id_dept = '$dept_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function UpdateRole($role_id, $role_name, $committee_id)
    {
        $sql = "UPDATE role SET name = '$role_name', committees = '$committee_id' WHERE role_id = '$role_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function Updatedept($dept_id, $dept_name)
    {
        $sql = "UPDATE dept SET name = '$dept_name' WHERE id_dept = '$dept_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditUserRole($user_id, $role_id)
    {
        $sql = "UPDATE users SET role = '$role_id' WHERE user_id = '$user_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function EditUserDept($user_id, $dept_id)
    {
        $sql = "UPDATE users SET dept = '$dept_id' WHERE user_id = '$user_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function Add_User($name, $email, $password, $address, $id, $dept_id, $role_id)
    {
        $sql = "INSERT INTO users SET full_name = '$name', email = '$email', password = '$password', address = '$address', user_id = '$id', dept = '$dept_id', role = '$role_id'";
        $result = $this->Connection()->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

    public function GetUserPage($offset, $limit)
    {
        $sql = "SELECT * FROM users LIMIT $offset, $limit";
        $result = $this->Connection()->query($sql);
        if ($result->num_rows > 0) {
            $rows = array();
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

}
?>