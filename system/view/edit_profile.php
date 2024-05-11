<?php if (isset($_GET['edit_profile']) && isset($_SESSION['id'])): ?>
    <?php 
        $id = $_SESSION['id']['user_id'];    
        $db = new DB();
        $user = $db->User($id);

    ?>
    <div class="container">
        <h1>Edit Profile</h1>
        <div class="row">

            <div class="col-8">
                <form action="function/edit_profile.php" method="post" enctype="multipart/form-data">
                    <div class="col-3" style="position: relative;">
                        <input name="logo" type="file" id="imageInput" class="form-control" onchange="previewImage(this)"
                            style="display: none;">
                        <label for="imageInput" style="cursor: pointer; position: relative; overflow: hidden;">
                            <img id="imagePreview"
                                src="<?php echo 'assets/img/avatar/' . $user['img'] ?>"
                                alt="Image Preview"
                                style="max-width: 50%; margin-top: 10px; cursor: pointer; opacity: 1; transition: opacity 0.3s ease-in-out;border-radius: 50%;">
                            <div class="imageOverlay"
                                style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 18px; display: none; background: rgba(0, 0, 0, 0.5); padding: 10px;">
                                Choose Image</div>
                        </label>
                    </div>
                    <div class="form-group
                    ">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" required name="full_name"
                            value="<?php echo $user['full_name'] ?>">
                    </div>
                    <br>
                    <button type="submit" name="edit_profile" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage(input) {
            var preview = document.getElementById('imagePreview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "<?php echo $_SESSION['id']['img'] == 'user.png' ? 'assets/img/' . $_SESSION['id']['img'] : 'assets/img/avatar/' . $_SESSION['id']['img'] ?>";
            }
        }
    </script>
<?php endif; ?>