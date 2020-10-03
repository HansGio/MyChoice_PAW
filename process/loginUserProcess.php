<?php
include 'db.php';
session_start();
$output = NULL;

if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $output = "Username or password can't be empty";
    } else {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' LIMIT 1") or die(mysqli_error($con));

        if (mysqli_num_rows($query) == 0) {
            $output = "Username not found";
        } else {
            $user = mysqli_fetch_assoc($query);

            if ($user['validated'] == 0) {
                $output = "Validate your email first.";
            } else if (password_verify($password, $user['password'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = $user;
            } else {
                $output = "Invalid username or password";
            }
        }
    }
}
