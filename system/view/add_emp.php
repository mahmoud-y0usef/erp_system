<?php
if (isset($_GET['add_emp'])):
    require_once '../function/DB.php';
    $db = new DB();
    $users = $db->Users();
    $roles = $db->Roles();
    $depts = $db->Depts();
    ?>

    <!-- show emp -->
    <div class="container">
        <!-- add emp button-->

        <button style="float:right;border:none;background:none;color:darkblue;font-size:25px" type="button"
            class="fa-regular fa-user-plus" data-toggle="modal" data-target="#exampleModal_add_emp">
        </button>
        <!-- Modal for add emp -->
        <div class="modal fade" id="exampleModal_add_emp" tabindex="-1" aria-labelledby="exampleModalLabelAddEmp"
            aria-hidden="true">
            <?php
            $name_button = 'إضافة';
            $name = 'إضافة موظف جديد';
            $form_action = 'add_emp.php';
            $label = 'الاسم';
            $input_name = 'name';
            $value = '';
            $id = '';
            $submit_button_name = 'add_emp';
            include 'modal_template.php';
            ?>
        </div>

        <h1>الموظفين</h1>
        <hr>
        <table class="table" style="font-size:25px">

            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Dept</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><?php echo $user['full_name'] ?></td>
                        <td><?php echo $db->RoleName($user['role']) ?></td>
                        <td><?php echo $db->DeptName($user['dept']) ?></td>
                        <td>
                            <button style="border:none;background:none;color:green;font-size:25px" type="button"
                                class="fa-duotone fa-pen-to-square" data-toggle="modal"
                                data-target="#exampleModal_user_<?php echo $user['user_id']; ?>">
                            </button>
                            <button style="border:none;background:none;color:red;font-size:25px" type="button"
                                class="fa-solid fa-trash-can" data-toggle="modal"
                                data-target="#exampleModaldel_user_<?php echo $user['user_id']; ?>">
                            </button>
                        </td>
                    </tr>
                    <!-- Modal for user -->
                    <div class="modal fade" id="exampleModal_user_<?php echo $user['user_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabelUser_<?php echo $user['user_id']; ?>" aria-hidden="true">
                        <?php
                        $width = '150%';
                        $name_button = 'تعديل';
                        $name = 'تعديل الموظف';
                        $form_action = 'edit_emp.php';
                        $label = 'الاسم';
                        $input_name = 'name';
                        $value = $user['full_name'];
                        $id = $user['user_id'];
                        $submit_button_name = 'edit_emp';
                        include 'modal_template.php';
                        ?>
                    </div>
                    <!-- Modal for delete user -->
                    <div class="modal fade
                " id="exampleModaldel_user_<?php echo $user['user_id']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabelDelUser_<?php echo $user['user_id']; ?>" aria-hidden="true">
                        <?php
                        $width = '';
                        $name_button = 'حذف';
                        $name = '<i style="color:red;font-size:30" class="fa-light fa-circle-exclamation"></i> حذف الموظف';
                        $form_action = 'del_emp.php';
                        $label = ' هل أنت متأكد من حذف الموظف'." ".' <br>'.$user['full_name'];
                        $input_name = '';
                        $value = '';
                        $id = $user['user_id'];
                        $submit_button_name = 'del_emp';
                        include 'modal_template.php';
                        ?>
                    </div>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>