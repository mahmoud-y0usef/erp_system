<?php
if (isset($_GET['user_asign_dept']) && $role['role_id'] == 14):
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Dept</li>
            <li class="breadcrumb-item active" aria-current="page">User Asign Dept</li>
        </ol>
    </nav>

    <?php 
        if(isset($_GET['success'])) {
            echo '<div class="alert alert-success" role="alert">
                Dept assigned successfully!
            </div>';
        }
        if(isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">
                Dept not assigned!
            </div>';
        }
    ?>
    <div class="container box" style="height: 500px;">
        <form style="box-shadow: .1px .1px 20px rgb(0, 0, 0, 0.3);" action="function/user_edit_dept.php" method="post">
            <!-- search user by id -->
            <div class="form-group">
                <label for="userId">User ID : </label>
                <input type="text" class="form-control" id="userId" name="userId" required>
            </div>
            <div id="userInfo" style="display: none;">
                <!-- User information will be displayed here -->
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#userId').on('input', function () {
                var userId = $(this).val();
                if (userId.length > 0) {
                    $.ajax({
                        url: 'function/get_dept_user_info.php',
                        method: 'POST',
                        data: { userId: userId },
                        success: function (response) {
                            if (response) {
                                $('#userInfo').html(response).show();
                            } else {
                                $('#userInfo').hide();
                            }
                        }
                    });
                } else {
                    $('#userInfo').hide();
                }
            });
        });
    </script>

<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>
