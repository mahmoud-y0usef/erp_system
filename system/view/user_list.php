<?php
if (isset($_GET['user_list']) && $role['role_id'] == 14):
    // Get the current page or set a default
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $elementsPerPage = 10;
    $offset = ($currentPage - 1) * $elementsPerPage;

    // Fetch the total number of roles
    $totalRoles = count($db->Users());
    $totalPages = ceil($totalRoles / $elementsPerPage);

    // Fetch the roles for the current page
    $users = $db->GetUserPage($offset, $elementsPerPage); // you'll need to implement this method
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">المستخدمين</li>
            <li class="breadcrumb-item active" aria-current="page">إدارة المستخدمين</li>
        </ol>
    </nav>

    <!-- select the role list -->
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">User List</h3>
            <br />
            <div class="table-responsive">
                <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 'user_updated') {
                        echo '<div class="alert alert-success" role="alert">User updated successfully!</div>';
                    } elseif ($_GET['success'] == 'user_deleted') {
                        echo '<div class="alert alert-success" role="alert">User deleted successfully!</div>';
                    }
                } elseif (isset($_GET['error'])) {
                    if ($_GET['error'] == 'user_not_updated') {
                        echo '<div class="alert alert-danger" role="alert">User not updated!</div>';
                    } elseif ($_GET['error'] == 'user_not_deleted') {
                        echo '<div class="alert alert-danger" role="alert">User not deleted!</div>';
                    }
                }
                ?>
                <table id="user_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Role</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = $offset + 1;
                        foreach ($users as $user) {
                            echo '<tr>';
                            echo '<td>' . $id . '</td>';
                            echo '<td>' . $user['full_name'] . '</td>';
                            echo '<td>' . $user['email'] . '</td>';
                            echo '<td>' . $db->RoleName($user['role']) . '</td>';
                            echo '<td>';
                            echo '<button type="button" name="update" id="' . $user['user_id'] . '" class="btn btn-warning btn-xs update" data-toggle="modal" data-target="#updateModal" data-rolename="' . $user['email'] . '" data-lock="' . $user['option_img'] . '">Update</button>&nbsp;&nbsp;';
                            echo '<button type="button" name="delete" id="' . $user['user_id'] . '" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deleteModal">Delete</button>';
                            echo '</td>';
                            echo '</tr>';
                            $id++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination Controls -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php if ($currentPage > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?user_list=1&page=<?php echo $currentPage - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                        <li class="page-item <?php if ($page == $currentPage)
                            echo 'active'; ?>">
                            <a class="page-link" href="?user_list=1&page=<?php echo $page; ?>"><?php echo $page; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?user_list=1&page=<?php echo $currentPage + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateForm" method="post" action="function/edit_emp.php">
                        <input type="hidden" id="updateuserId" name="user_id">
                        <!-- Form fields -->
                        <div class="form-group">
                            <label for="userName">Email</label>
                            <input type="text" class="form-control" id="userName" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="rest">Reset Photo</label>
                            <input type="checkbox" name="reset">
                            <label for="close_photo">Lock Photo</label>
                            <input type="checkbox" name="lock" id="lock">
                        </div>
                        <button type="submit" name="update_user" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this user?</p>
                    <form id="deleteForm" method="post" action="function/del_emp.php">
                        <input type="hidden" id="deleteRoleId" name="user_id">
                        <button type="submit" name="delete_user" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Update button click handler
            document.querySelectorAll('.update').forEach(function (button) {
                button.addEventListener('click', function () {
                    var userId = this.id;
                    var userName = this.getAttribute('data-rolename');
                    var lock = this.getAttribute('data-lock');
                    document.getElementById('updateuserId').value = userId;
                    document.getElementById('userName').value = userName;
                    document.getElementById('lock').checked = (lock == 1);
                });
            });

            // Delete button click handler
            document.querySelectorAll('.delete').forEach(function (button) {
                button.addEventListener('click', function () {
                    var userId = this.id;
                    document.getElementById('deleteRoleId').value = userId;
                });
            });
        });
    </script>

<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>