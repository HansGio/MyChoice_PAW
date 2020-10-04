<?php
include 'process/loginUserProcess.php';

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
        <title>MyChoice</title>
    </head>

    <body>
        <div class="container text-center min-vh-100">
            <img class="logo-img pt-4" src="img/logo/logo.png" alt="">
            <div class=" d-flex pt-5 justify-content-around">

                <div class=" px-5">
                    <div style="width: 450px;" class="shadow card p-5 text-center">
                        <h1>Sign In</h1>
                        <p class="py-3">
                            Lorem ipsum sjdns j dsjk jdoj idoj joijij mnsdjand en onkdnsa osdnmwjnansnk
                            nknsal.
                        </p>
                        <form class="text-left" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control" value="<?= isset($_POST['username']) ? $_POST['username'] : "" ?>" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control" />
                            </div>
                            <?php
                            if (isset($output)) {
                                echo '<div class="alert alert-danger" role="alert">' . $output . '</div>';
                            }
                            ?>
                            <button type="submit" name="login" class="btn w-100 my-3 btn-dark">Sign in</button>
                        </form>
                        <small>Don't have an account? <a href="registerUser.php">Register Here</a></small>
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