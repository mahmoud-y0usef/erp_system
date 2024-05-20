<?php
if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    require_once '../../function/DB.php';
    $db = new DB();
    $user = $db->User($userId);
    if ($user) {
        $id = $user['user_id'];
        $roles = $db->Role($id);
        $allRoles = $db->Roles();
        echo '<input type="hidden" name="user_id" value="' . $id . '">';
        echo '<table class="table table-bordered">';
        echo '<tr><th>Id</th><td>' . htmlspecialchars($user['user_id']) . '</td></tr>';
        echo '<tr><th>Email</th><td>' . htmlspecialchars($user['email']) . '</td></tr>';
        echo '<tr><th>Current Role</th><td>' . htmlspecialchars($roles['name']) . '</td></tr>';
        echo '<tr><th>Assign New Role</th><td>';
        echo '<select class="form-control" id="newRole" name="new_role">';
        foreach ($allRoles as $role) {
            echo '<option value="' . $role['role_id'] . '"' . ($role['role_id'] == $user['role'] ? ' selected' : '') . '>' . $role['name'] . '</option>';
        }
        echo '</select>';
        echo '</td></tr>';
        echo '<tr><td colspan="2"><button type="submit" name="update_role" class="btn btn-primary">Save changes</button></td></tr>';
        echo '</table>';
    } else {
        echo "<p>User not found</p>";
    }
} else {
    echo "";
}
?>