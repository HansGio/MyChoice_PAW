<?php
include '../dashboard/dashboardUser.php';
if (isset($_SESSION['isLogin'])) {
?>
    <div class="container content">
        <h3 class="d-inline">Profile</h3>
        <hr>
        <div class="row">
            <div class="col-sm-4 overflow-hidden py-4">
                <img src="../img/photo-1529665253569-6d01c0eaf7b6.jpg" alt="" class="rounded-circle" style="object-fit:cover;width:250px; height:250px;">
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