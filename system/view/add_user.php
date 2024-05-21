<?php
if (isset($_GET['add_user']) && $_SESSION['id']['role'] == 14):
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">المستخدمين</li>
            <li class="breadcrumb-item active" aria-current="page">إضافة مستخدم</li>
        </ol>
    </nav>

    <div class="container box" style="height: 649px;">
        <form action="function/add_user.php" method="post">
            <?php 
                if (isset($_GET['add_user']) && $_GET['add_user'] == 'success') {
                    echo '<div class="alert alert-success" role="alert">تم إضافة المستخدم بنجاح</div>';
                }
                if (isset($_GET['add_user']) && $_GET['add_user'] == 'error') {
                    echo '<div class="alert alert-danger" role="alert">حدث خطأ ما</div>';
                }
            
            ?>
            <div class="row">
                <div class="col-6">
                    <label for="name">إسم الموظف</label>
                    <br>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="id">رقم الموظف</label>
                    <br>
                    <input type="text" id="id" name="id" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="email">البريد الإلكتروني</label>
                    <br>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="password">كلمة السر</label>
                    <br>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="address">العنوان</label>
                    <br>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <div class="col-6">
                    <label for="phone">رقم الجوال</label>
                    <br>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary " name="add_user" style="margin-top: 30px;width:100px">إضافة</button>
            </center>
        </form>
    </div>



<?php else:
    header('Location: ../index.php');
    exit();
endif;
?>