<div class="modal-dialog">
    <div class="modal-content" style="width:<?= $width ?>">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $name ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="function/<?php echo $form_action ?>" method="POST">
                <div class="form-group">
                    <?php
                    if ($delete_emp == 1):
                        ?>
                        <label for="<?php echo $input_name ?>"><?php echo $label ?></label>
                    <?php endif; ?>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <?php
                    if ($edit_emp == 1):
                        ?>
                        <div class="container">
                            <div class="row">

                                <div class="col-6">
                                    <label for="<?= $user['full_name'] ?>"><?php echo $label ?></label>
                                    <input type="text" class="form-control" id="<?= $user['full_name'] ?>"
                                        name="full_name" value="<?= $user['full_name'] ?>">
                                </div>
                                <br>
                                <div class="col-6">
                                    <label for="email">البريد الإلكتروني</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        value="<?= $user['email'] ?>">
                                </div>

                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <br>
                                <div class="col-6">
                                    <label for="password">كلمة السر</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                        value="<?= $user['password'] ?>">
                                </div>
                                <br>
                                <div class="col-6">
                                    <label for="phone">رقم الهاتف</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="<?= $user['phone'] ?>">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <br>
                                <div class="col-6">
                                    <label for="password">إستعادة الصورة إلي وضعها الإفتراضي</label>
                                    <input type="checkbox" name="reset_img" value="1">
                                </div>
                                <div class="col-6">
                                    <label for="password"> صلاحية تغيير الصورة</label>
                                    <input type="checkbox" name="close_img" value="1" <?= $user['option_img'] == 1 ? 'checked': ''?>>
                                </div>
                            </div>
                        </div>
                        


                    <?php endif; ?>

                    <?php if($add_emp == 1): ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label for="id_number">الرقم الوظيفي</label>
                                <input type="text" class="form-control" id="id_number" name="id_number" required>
                            </div>
                            <div class="col-6">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="full_name">الاسم</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="col-6">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <label for="password">كلمة السر</label>
                                <input type="text" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-6">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <br>
                        <br>
                        <!-- dept -->
                        <div class="row">
                            <div class="col-6">
                                <label for="dept">القسم</label>
                                <select class="form-select" name="dept" id="dept" required>
                                    <option selected>اختر القسم</option>
                                    <?php
                                    $depts = $db->GetAllDept();
                                    foreach ($depts as $dept) {
                                        echo '<option value="' . $dept['id_dept'] . '">' . $dept['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- role -->
                            <div class="col-6">
                                <label for="role">الوظيفة</label>
                                <select class="form-select" name="role" id="role" required>
                                    <option selected>اختر الوظيفة</option>
                                    <?php
                                    $roles = $db->GetAllRole();
                                    foreach ($roles as $role) {
                                        echo '<option value="' . $role['role_id'] . '">' . $role['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                    </div>

                    <?php endif; ?>
                </div>
                <br>
                <button type="submit" name="<?php echo $submit_button_name ?>"
                    class="btn <?= $name_button == 'حذف' ? 'btn-danger' : 'btn-primary' ?>"><?= $name_button ?></button>
            </form>
        </div>
    </div>
</div>