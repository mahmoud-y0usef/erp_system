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
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                        href="#list-messages" role="tab" aria-controls="list-messages">الموظفين</a>
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
                                        <td><a class="btn btn-primary" href="?edit_deb&id=<?= $dept['id_dept'] ?>">Edit</a></td>
                                    </tr>
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
                                        <td><a class="btn btn-primary" href="?edit_role&id=<?= $role['role_id'] ?>">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <h1>الموظفين</h1>
                        <a style="float:right" href="?add_user" class="btn btn-primary">اضافة موظف</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">القسم</th>
                                    <th scope="col">الرول</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $user): ?>
                                    <tr>
                                        <th scope="row"><?php echo $key + 1 ?></th>
                                        <td><?php echo $user['full_name'] ?></td>
                                        <td><?php echo $db->DeptName($user['dept']) ?></td>
                                        <td><?php echo $db->RoleName($user['role']) ?></td>
                                        <td><a class="btn btn-primary" href="?edit_user&id=<?= $user['user_id'] ?>">Edit</a>
                                        </td>
                                        <td><a class="btn btn-danger" href="?delete_user&id=<?= $user['user_id'] ?>">Delete</a>
                                        </td>
                                    </tr>
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