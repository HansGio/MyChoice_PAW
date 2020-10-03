<?php
include 'db.php';
session_start();
$output = NULL;
$message = NULL;

$vkey = $_GET['vkey'];
$query = mysqli_query($con, "SELECT validated FROM users WHERE vkey='$vkey' LIMIT 1");
if (mysqli_num_rows($query) != 0) {
    if (mysqli_fetch_assoc($query)['validated'] == 0) {
        $validate = mysqli_query($con, "UPDATE users SET validated = 1 WHERE vkey = '$vkey'");
        $output = 'Your email address is validated!';
        $message = 'Login now, to experience our shop with your newly validated account!';
    } else {
        $output = 'Your email address is already validated!';
        $message = 'Login now to experience our shop!';
    }
} else {
    $output = 'User not found!';
    $message = 'Login with your registered accont!';
}
