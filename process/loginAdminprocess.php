<?php
session_start();

if (isset($_POST['submit'])) {
    include '../db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['isLoginAdmin'] = false;

    $query = mysqli_query($con, "SELECT * FROM admin where username = '$username' and password ='$password'") or die(mysqli_error($con));

    $row = mysqli_num_rows($query);
    if ($row == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['isLoginAdmin'] = true;
        // echo "login successful";
        echo
            '<script>
                alert("Login Success"); window.location = "../dashboard/dashboardAdmin.php"
            </script>';

        // header('location:dashboard/dashboardAdmin.php');
    } else {
        echo
            '<script>
                alert("Failed Success"); window.location = "../loginAdmin.php"
            </script>';
        // header('location:loginAdmin.php');
    }
}