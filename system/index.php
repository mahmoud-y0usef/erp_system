
<?php 
    require 'inc/header.php';
?>

<!-- <nav class="sidebar"> -->
    <?php 
        require 'inc/sidebar.php';
    ?>
<!-- </nav> -->


<section class="main_content dashboard_part">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                   <?php 
                        require 'inc/header2.php';
                   ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if(isset($_GET['admin_panel']))
            require 'view/admin_panel.php';
        elseif(isset($_GET['profile']))
            require 'view/profile.php';
        elseif(isset($_GET['edit_profile']))
            require 'view/edit_profile.php';
        elseif(isset($_GET['add_emp']))
            require 'view/add_emp.php';
        elseif(isset($_GET['model_tech']))
            require 'view/model_tech.php';
        elseif (isset($_GET['add_role'])) {
            require 'view/add_role.php';
        }
        elseif (isset($_GET['add_dept'])) {
            require 'view/add_dept.php';
        }elseif (isset($_GET['role_list'])) {
            require 'view/role_list.php';
        }elseif (isset($_GET['dept_list'])) {
            require 'view/dept_list.php';
        }elseif (isset($_GET['user_asign_role'])) {
            require 'view/user_asign_role.php';
        }elseif(isset($_GET['user_asign_dept'])){
            require 'view/user_asign_dept.php';
        }elseif (isset($_GET['add_user'])) {
            require 'view/add_user.php';
        }elseif (isset($_GET['user_list'])) {
            require 'view/user_list.php';
        }
        else
            require 'view/mainpage.php';
    ?>
    
    

    <div class="footer_part">
        <?php 
            
            require 'inc/footer.php';

        ?>
    </div>
</section>



<?php 
    require 'inc/footer2.php';
?>