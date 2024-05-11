<?php 
    if(isset($_SESSION['id'])):
    $id = $_SESSION['id']['user_id'];
    $db = new DB();
    $user = $db->User($id);
?>
<?php if(isset($_GET['profile'])): ?>
    <div class="container">
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-4">
                <img style="width:150px" src="<?php echo 'assets/img/avatar/'.$user['img'] ?>" alt="#">
            </div>
            <div class="col-8">
                <h3><?php echo $user['full_name'] ?></h3>
                <p><?php echo $user['email'] ?></p>
                <p><?php echo $user['phone'] ?></p>
                <p><?php echo $user['address'] ?></p>
                <br>
                <a class="btn btn-primary" href="?edit_profile">Edit Profile</a>
            </div>
        </div>
    </div>
<?php  endif; endif; ?>