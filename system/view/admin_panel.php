<?php if (isset($_SESSION['id']) && $_SESSION['id']['role'] == 14): ?>
    <?php
    require_once '../function/DB.php';
    $db = new DB();
    $roles = $db->Roles();
    $users = $db->Users();
    $depts = $db->Depts();

    ?>
    <div class="container">
        <h1>Admin Panel</h1>
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list"
                        href="#list-home" role="tab" aria-controls="list-home">الأقسام</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                        href="#list-profile" role="tab" aria-controls="list-profile">الرولات</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" 
                        href="?add_emp" role="tab">الموظفين</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <h1>الأقسام</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">القسم</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($depts as $key => $dept): ?>
                                    <tr>
                                        <th scope="row"><?php echo $key + 1 ?></th>
                                        <td><?php echo $dept['name'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal_dept_<?php echo $dept['id_dept']; ?>">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal for department -->
                                    <div class="modal fade" id="exampleModal_dept_<?php echo $dept['id_dept']; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabelDept_<?php echo $dept['id_dept']; ?>"
                                        aria-hidden="true">
                                        <?php
                                        $name = 'القسم';
                                        $form_action = 'edit_dept.php';
                                        $label = 'القسم';
                                        $input_name = 'dept';
                                        $value = $dept['name'];
                                        $id = $dept['id_dept'];
                                        $submit_button_name = 'edit_dept';
                                        include 'modal_template.php';
                                        ?>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <h1>الرولات</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الرول</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($roles as $key => $role): ?>
                                    <tr>
                                        <th scope="row"><?php echo $key + 1 ?></th>
                                        <td><?php echo $role['name'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal_role_<?php echo $role['role_id']; ?>">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal for role -->
                                    <div class="modal fade" id="exampleModal_role_<?php echo $role['role_id']; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabelRole_<?php echo $role['role_id']; ?>"
                                        aria-hidden="true">
                                        <?php
                                        $name = 'الرول';
                                        $form_action = 'edit_role.php';
                                        $label = 'الرول';
                                        $input_name = 'role';
                                        $value = $role['name'];
                                        $id = $role['role_id'];
                                        $submit_button_name = 'edit_role';
                                        include 'modal_template.php';
                                        ?>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <script>
        window.location.href = '../';
    </script>
<?php endif; ?>