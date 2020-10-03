<?php
include 'db.php';
session_start();
$output = NULL;

if (isset($_POST['register'])) {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['birth_date']) || empty($_POST['gender']) || empty($_POST['address'])) {
        $output = "All field must be filled.";
    } else {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_DEFAULT);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $birth_date = mysqli_real_escape_string($con, $_POST['birth_date']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $vkey = md5(time() . $username);

        $queryUsername = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
        $queryEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));

        if (mysqli_num_rows($queryUsername) > 0) {
            $output = "Username already taken.";
        } else if (mysqli_num_rows($queryEmail) > 0) {
            $output = "Email already used.";
        } else {
            $insert = mysqli_query($con, "INSERT INTO users(name, username, password, email, gender, address, birth_date, validated, vkey) VALUES ('$name', '$username', '$password', '$email', '$gender', '$address', '$birth_date', 1, '$vkey')") or die(mysqli_error($con));
            if ($insert) {
                echo
                    '<script>
                        alert("Register Success"); window.location = "loginUser.php"
                    </script>';
            } else {
                $output = 'Registration failed.';
            }
        }
    }
}
