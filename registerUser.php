<?php
include 'process/registerUserProcess.php';

if (!isset($_SESSION['isLoginUser'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--   FRAMEWORK BOOTSRAP  -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link type="text/css" rel="stylesheet" href="css/styleUser.css" />
        <link rel="icon" type="image/png" href="img/favicon/favicon.png" />

        <!--   SCRIPT     -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>MyChoice</title>
    </head>

    <body>
        <div class="container text-center min-vh-100">
            <a href="index.php"><img class="logo-img pt-4" src="img/logo/logo.png" alt=""></a>
            <div class=" d-flex pt-5 justify-content-around">

                <div class=" px-5">
                    <div style="width: 450px;" class="shadow card p-5 mb-5 text-center">
                        <h1 class="text-center">Sign Up</h1>
                        <p class="py-3">Create MyChoice Account to Continue Shopping</p>
                        <form class="text-left" method="POST">
                            <?php
                            if (isset($output)) {
                                echo '<div class="alert alert-danger" role="alert">' . $output . '</div>';
                            }
                            ?>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?= isset($_POST['username']) ? $_POST['username'] : "" ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : "" ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=" fas fa-birthday-cake"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="birth_date" placeholder="Birthdate" value="<?= isset($_POST['birth_date']) ? $_POST['birth_date'] : "" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="gender">
                                    <option value="" <?= !isset($_POST['gender']) ? "selected" : "" ?> disabled>Select Gender</option>
                                    <option value="Man" <?= isset($_POST['gender']) && $_POST['gender'] == "Man" ? "selected" : "" ?>>Man</option>
                                    <option value="Woman" <?= isset($_POST['gender']) && $_POST['gender'] == "Woman" ? "selected" : "" ?>>Woman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="address" rows="3" placeholder="Address"><?= isset($_POST['address']) ? $_POST['address'] : "" ?></textarea>
                            </div>
                            <button type="submit" name="register" class="my-3 btn btn-dark w-100">Register</button>
                        </form>
                        <small>Already have an account? <a href="loginUser.php">Login Here</a></small>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
<?php
} else {
    header('location: layoutUser');
}
?>