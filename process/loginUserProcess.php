<?php
if (isset($_POST['login'])) {
    include('../db.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' Limit 11") or die(mysqli_error($con));

    if (mysqli_num_rows($query) == 0) {
        echo
            '<script>
                alert("Username not found"); window.location = "../loginUser.php"
            </script>';
    } else {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;

            echo
                '<script>
                    alert("Login Success"); window.location = "../layoutUser/"
                </script>';
        } else {
            echo
                '<script>
                    alert("Username or Password Invalid"); window.location = "../loginUser.php"
                </script>';
        }
    }
} else {
    echo
        '<script>
            window.history.back()"
        </script>';
}
