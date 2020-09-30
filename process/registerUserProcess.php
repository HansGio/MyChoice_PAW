<?php
// ----------------------------
if (isset($_POST['register'])) {
    include('../db.php');

    $username = $_POST['username'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = mysqli_query($con, "INSERT INTO users(name, username, password, email, gender, address, birth_date) VALUES ('$name', '$username', '$password', '$email', '$gender', '$address', '$birth_date')") or die(mysqli_error($con));

    if ($query) {
        echo
            '<script>
                alert("Register Success"); window.location = "../loginPage.php"
            </script>';
    } else {
        echo
            '<script>
                alert("Register Failed"); window.location = "../registerPage.php"
            </script>';
    }
} else {
    echo
        '<script>
            window.history.back()
        </script>';
}
