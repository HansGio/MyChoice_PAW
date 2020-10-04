<?php

if (isset($_POST['submit'])) {
    include '../db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM admin where username = '$username' and password ='$password'") or die(mysqli_error($con));

    $row = mysqli_num_rows($query);
    if ($row == 1) {
        $_SESSION['username'] = $username;
        // echo "login successful";
        echo
            '<script>
                alert("Login Success"); window.location = "../dashboard/dashboardAdmin.php"
            </script>';

        // header('location:dashboard/dashboardAdmin.php');
    } else {
        echo "login failed";
        echo
            '<script>
                alert("Login Success"); window.location = "../loginAdmin.php"
            </script>';
        // header('location:loginAdmin.php');
    }
}