<?php
include '../dashboard/dashboardUser.php';
if (isset($_SESSION['isLogin'])) {
?>
    <div class="container content">
        <h3 class="d-inline">Profile</h3>
        <hr>
        <div class="row">
            <div class="text-center col-sm-4 overflow-hidden py-4">
                <img src="../img/profile/profile<?= $_SESSION['user']['img_status'] == 0 ? "default" : $_SESSION['user']['id'] ?>.jpg?<?= mt_rand() ?>" alt="Profile Picture" class="rounded-circle mx-auto mt-1 profile-large">
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col">
                        <h5>Personal Info</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Name</div>
                    <div class="col-9"><?= $_SESSION['user']['name'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Username</div>
                    <div class="col-9"><?= $_SESSION['user']['username'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Email</div>
                    <div class="col-9"><?= $_SESSION['user']['email'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Gender</div>
                    <div class="col-9"><?= $_SESSION['user']['gender'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Birthdate</div>
                    <div class="col-9"><?= $_SESSION['user']['birth_date'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">Address</div>
                    <div class="col-9"><?= $_SESSION['user']['address'] ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <a href="editProfileUser.php" class="btn btn-dark mt-3 w-100">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
<?php
}
?>