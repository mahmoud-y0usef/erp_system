<?php
if (isset($_GET['role_list']) && $role['role_id'] == 14):
    // Get the current page or set a default
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $elementsPerPage = 10;
    $offset = ($currentPage - 1) * $elementsPerPage;

    // Fetch the total number of roles
    $totalRoles = count($db->GetAllRole()); // assuming GetAllRole returns an array
    $totalPages = ceil($totalRoles / $elementsPerPage);

    // Fetch the roles for the current page
    $roleName = $db->GetRolePage($offset, $elementsPerPage); // you'll need to implement this method
    $committees = $db->GetAllCommittees();
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active" aria-current="page">Role List</li>
        </ol>
    </nav>

    <!-- select the role list -->
    <div class="row">
        <div class="col-md-12">
            <h3 align="center">Role List</h3>
            <br />
            <div class="table-responsive">
                <?php 
                if (isset($_GET['success']) && $_GET['success'] == 'role_updated') {
                    echo '<div class="alert alert-success" role="alert">Role updated successfully!</div>';
                } elseif (isset($_GET['error']) && $_GET['error'] == 'role_not_updated') {
                    echo '<div class="alert alert-danger" role="alert">Role not updated!</div>';
                }

                if (isset($_GET['success']) && $_GET['success'] == 'role_deleted') {
                    echo '<div class="alert alert-success" role="alert">Role deleted successfully!</div>';
                } elseif (isset($_GET['error']) && $_GET['error'] == 'role_not_deleted') {
                    echo '<div class="alert alert-danger" role="alert">Role not deleted!</div>';
                }
                ?>
                <table id="user_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="20%">Role Name</th>
                            <th width="20%">Committee Name</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = $offset + 1;
                        foreach ($roleName as $role) {
                            echo '<tr>';
                            echo '<td>' . $id . '</td>';
                            echo '<td>' . $role['name'] . '</td>';

                            foreach ($committees as $committee) {
                                if ($role['committees'] == $committee['id']) {
                                    echo '<td>' . $committee['name'] . '</td>';
                                }
                            }
                            echo '<td><button type="button" name="update" id="' . $role['role_id'] . '" class="btn btn-warning btn-xs update" data-toggle="modal" data-target="#updateModal" data-rolename="' . $role['name'] . '" data-committee="' . $role['committees'] . '">Update</button></td>';
                            echo '<td><button type="button" name="delete" id="' . $role['role_id'] . '" class="btn btn-danger btn-xs delete" data-toggle="modal" data-target="#deleteModal">Delete</button></td>';
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
                            <a class="page-link" href="?role_list=1&page=<?php echo $currentPage - 1; ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                        <li class="page-item <?php if ($page == $currentPage) echo 'active'; ?>">
                            <a class="page-link" href="?role_list=1&page=<?php echo $page; ?>"><?php echo $page; ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?role_list=1&page=<?php echo $currentPage + 1; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updateForm" method="post" action="function/update_role.php">
                        <input type="hidden" id="updateRoleId" name="role_id">
                        <!-- Form fields -->
                        <div class="form-group">
                            <label for="roleName">Role Name</label>
                            <input type="text" class="form-control" id="roleName" name="role_name">
                        </div>
                        <div class="form-group">
                            <label for="committeeSelect">Committee Name</label>
                            <select class="form-control" id="committeeSelect" name="committee_id">
                                <?php foreach ($committees as $committee): ?>
                                    <option value="<?php echo $committee['id']; ?>"><?php echo $committee['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="update_role" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this role?</p>
                    <form id="deleteForm" method="post" action="function/delete_role.php">
                        <input type="hidden" id="deleteRoleId" name="role_id">
                        <button type="submit" name="delete_role" class="btn btn-danger">Delete</button>
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
                    var roleId = this.id;
                    var roleName = this.getAttribute('data-rolename');
                    var committeeId = this.getAttribute('data-committee');
                    document.getElementById('updateRoleId').value = roleId;
                    document.getElementById('roleName').value = roleName;
                    document.getElementById('committeeSelect').value = committeeId;
                });
            });

            // Delete button click handler
            document.querySelectorAll('.delete').forEach(function (button) {
                button.addEventListener('click', function () {
                    var roleId = this.id;
                    document.getElementById('deleteRoleId').value = roleId;
                });
            });

            

            
        });
    </script>

<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>
