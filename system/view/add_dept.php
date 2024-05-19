<?php
if (isset($_GET['add_dept']) && $role['role_id'] == 14):
    $committees = $db->GetAllCommittees();
    ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Dept</li>
            <li class="breadcrumb-item active" aria-current="page">Add Dept</li>
        </ol>
    </nav>



    <div class="container box">


        <form action="function/add_dept.php" method="post">
            <?php
            if (isset($_GET['add_dept']) && $_GET['add_dept'] == 'error') {
                echo '<div class="alert alert-danger" role="alert">
                Dept already exists!
            </div>';
            }
            if (isset($_GET['add_dept']) && $_GET['add_dept'] == 'success') {
                echo '<div class="alert alert-success" role="alert">
                Dept added successfully!
            </div>';
            }
            ?>

            <label for="roleName">Dept Name : </label>
            <input type="text" class="form-control" id="roleName" name="depteName" required>

            <br>
            <br>
            
            <button type="submit" name="add_dept" class="btn btn-primary">إضافة</button>
        </form>
    </div>


<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>