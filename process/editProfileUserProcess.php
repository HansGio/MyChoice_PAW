<?php
include_once '../db.php';

$output11 = NULL;

if (isset($_POST['save'])) {
    if (empty($_POST['username']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['birth_date']) || empty($_POST['gender']) || empty($_POST['address'])) {
        $output1 = "All fields must be filled out.";
    } else {
        $id = $_SESSION['user']['id'];
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $birth_date = mysqli_real_escape_string($con, $_POST['birth_date']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $queryUsername = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND id != $id") or die(mysqli_error($con));
        $queryEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND id != $id") or die(mysqli_error($con));

        if (mysqli_num_rows($queryUsername) > 0) {
            $output1 = "Username already taken.";
        } else if (mysqli_num_rows($queryEmail) > 0) {
            $output1 = "Email already used.";
        } else {
            $update = mysqli_query($con, "UPDATE users SET name='" . $name . "', username='" . $username . "', email='" . $email . "' , birth_date='" . $birth_date . "' , gender='" . $gender . "' , address='" . $address . "' WHERE id=" . $id) or die(mysqli_error($con));
            if ($update) {
                $select = mysqli_query($con, "SELECT * FROM users WHERE id = " . $id . " LIMIT 1") or die(mysqli_error($con));
                $_SESSION['user'] = mysqli_fetch_assoc($select);
                header('location: profileUser.php');
            } else {
                $output1 = 'Edit failed.';
            }
        }
    }
} else if (isset($_POST['applyImage'])) {
    $file = $_FILES['profile'];
    if (!empty($file['name'])) {

        $fileName = $_FILES['profile']['name'];
        $fileTmpName = $_FILES['profile']['tmp_name'];
        $fileSize = $_FILES['profile']['size'];
        $fileError = $_FILES['profile']['error'];
        $fileType = $_FILES['profile']['type'];

        $fileExt = explode('.', $fileName);
        $fileExtActual = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg');

        if (in_array($fileExtActual, $allowed)) {
            if ($fileError == 0) {
                if ($fileSize < 5000000) {
                    $fileNameNew = "profile" . $_SESSION['user']['id'] . ".jpg";
                    $fileDestination = "../img/profile/" . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $query = mysqli_query($con, "UPDATE users SET img_status = 1 WHERE id = " . $_SESSION['user']['id']) or die(mysqli_error($con));
                    $select = mysqli_query($con, "SELECT * FROM users WHERE id = " . $_SESSION['user']['id'] . " LIMIT 1") or die(mysqli_error($con));
                    $_SESSION['user'] = mysqli_fetch_assoc($select);
                } else {
                    $output2 = 'Your file is too big (Max 5MB)';
                }
            } else {
                $output2 = 'There was an eror uploading your file.';
            }
        } else {
            $output2 = 'Incompatible file type.';
        }
    } else {
        $output2 = 'Upload your picture first.';
    }
} else if (isset($_POST['cancel'])) {
    header('location: profileUser.php');
}
