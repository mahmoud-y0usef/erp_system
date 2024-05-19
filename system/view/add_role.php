<?php
if (isset($_GET['add_role']) && $role['role_id'] == 14):
    $committees = $db->GetAllCommittees();
    ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Roles</li>
            <li class="breadcrumb-item active" aria-current="page">Add Role</li>
        </ol>
    </nav>



    <div class="container box">


        <form action="function/add_role.php" method="post">
            <?php
            if (isset($_GET['add_role']) && $_GET['add_role'] == 'error') {
                echo '<div class="alert alert-danger" role="alert">
                Role already exists!
            </div>';
            } 
            if (isset($_GET['add_role']) && $_GET['add_role'] == 'success') {
                echo '<div class="alert alert-success" role="alert">
                Role added successfully!
            </div>';
            }
            ?>

            <label for="roleName">Role Name : </label>
            <input type="text" class="form-control" id="roleName" name="roleName" required>

            <br>
            <label for="roleStatus">Committees : </label>
            <select class="form-control" id="roleStatus" name="roleStatus" required>
                <!-- fetch all committees in database -->
                <?php foreach ($committees as $committee): ?>
                    <option value="<?php echo $committee['id'] ?>"><?php echo $committee['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <button type="submit" name="add_role" class="btn btn-primary">إضافة</button>
        </form>
    </div>


<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>