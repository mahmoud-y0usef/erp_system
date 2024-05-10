
<?php 
    require 'inc/header.php';
?>

<nav class="sidebar">
    <?php 
        require 'inc/sidebar.php';
    ?>
</nav>


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

    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                
                <div class="col-lg-12">
                   <img src="assets/img/struct.png">
                </div>
            </div>
        </div>
    </div>

    <div class="footer_part">
        <?php 
            
            require 'inc/footer.php';

        ?>
    </div>
</section>



<?php 
    require 'inc/footer2.php';
?>