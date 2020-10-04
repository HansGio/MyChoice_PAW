<?php
include '../dashboard/dashboardUser.php';
include '../process/editProfileUserProcess.php';
if (isset($_SESSION['isLoginUser'])) {
?>
    <div class="container content">
        <h3 class="d-inline">Edit Profile</h3>
        <hr>
        <div class="row">
            <div class="col-sm-4 overflow-hidden pb-4">
                <div class=" card p-4 shadow">
                    <h5 class="text-left mb-0">Profile Picture</h5>
                    <hr>
                    <?php
                    if (isset($output2)) {
                        echo '<div class="alert alert-danger" role="alert">' . $output2 . '</div>';
                    }
                    ?>
                    <img src="../img/profile/profile<?= $_SESSION['user']['img_status'] == 0 ? "default" : $_SESSION['user']['id'] ?>.jpg?<?= mt_rand() ?>" alt="Profile Picture" class="rounded-circle mx-auto mt-1 profile-large">
                    <form class="text-center" method="POST" enctype="multipart/form-data">
                        <div class="form-group mt-4 mx-auto bg-light border w-100">
                            <input type="file" class="form-control-file" name="profile">
                        </div>
                        <button type="submit" name="applyImage" class="my-3 btn btn-dark w-100">Apply Picture</button>
                        <small>*.jpg or .jpeg file only</small>
                    </form>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card shadow p-4">
                    <h5 class="text-left mb-0">Personal Info</h5>
                    <hr>
                    <form class="text-left" method="POST">
                        <?php
                        if (isset($output1)) {
                            echo '<div class="alert alert-danger" role="alert">' . $output1 . '</div>';
                        }
                        ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $_SESSION['user']['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $_SESSION['user']['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $_SESSION['user']['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Birthdate</label>
                            <div class="input-group">
                                <input type="date" class="form-control" name="birth_date" placeholder="Birthdate" value="<?= $_SESSION['user']['birth_date'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="" <?= !isset($_SESSION['user']['name']) ? "selected" : "" ?> disabled>Select Gender</option>
                                <option value="Man" <?= $_SESSION['user']['gender'] == "Man" ? "selected" : "" ?>>Man</option>
                                <option value="Woman" <?= $_SESSION['user']['gender'] == "Woman" ? "selected" : "" ?>>Woman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Address</label>
                            <textarea class="form-control" name="address" rows="3" placeholder="Address"><?= $_SESSION['user']['address'] ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" name="save" class="my-3 btn btn-dark w-100">Save</button>
                            </div>
                            <div class="col-6">
                                <button type="submit" name="cancel" class="my-3 btn btn-warning w-100">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
<?php
}
?>