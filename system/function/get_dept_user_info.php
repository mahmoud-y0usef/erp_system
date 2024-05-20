<?php
if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    require_once '../../function/DB.php';
    $db = new DB();
    $user = $db->User($userId);
    if ($user) {
        $id = $user['user_id'];
        $dept = $db->Dept($id);
        $dept_name = $db->DeptName($user['dept']);
        $allDepts = $db->Depts();

        echo '<input type="hidden" name="user_id" value="' . $id . '">';
        echo '<table class="table table-bordered">';
        echo '<tr><th>Id</th><td>' . htmlspecialchars($user['user_id']) . '</td></tr>';
        echo '<tr><th>Email</th><td>' . htmlspecialchars($user['email']) . '</td></tr>';
        echo '<tr><th>Current Dept</th><td>' . htmlspecialchars($dept_name) . '</td></tr>';
        echo '<tr><th>Assign New Dept</th><td>';
        echo '<select class="form-control" id="newRole" name="new_dept">';
        foreach ($allDepts as $dept) {
            echo '<option value="' . $dept['id_dept'] . '"' . ($dept['id_dept'] == $user['dept'] ? ' selected' : '') . '>' . $dept['name'] . '</option>';
        }
        echo '</select>';
        echo '</td></tr>';
        echo '<tr><td colspan="2"><button type="submit" name="update_dept" class="btn btn-primary">Save changes</button></td></tr>';
        echo '</table>';
    } else {
        echo "<p>User not found</p>";
    }
} else {
    echo "";
}
?>