<?php

if (isset($_POST['submit'])) {
    include_once '../db.php';

    if (
        !isset($_POST['name']) ||
        !isset($_POST['stock_s']) ||
        !isset($_POST['stock_m']) ||
        !isset($_POST['stock_l']) ||
        !isset($_POST['stock_xl']) ||
        !isset($_POST['description']) ||
        !isset($_POST['price']) ||
        !isset($_POST['gender']) ||
        !isset($_POST['status'])
    ) {
        echo
            '<script>
        alert("Field tidak boleh kosong"); window.history.back()
    </script>';
    } else {


        $name = $_POST['name'];
        $stock_s = $_POST['stock_s'];
        $stock_m = $_POST['stock_m'];
        $stock_l = $_POST['stock_l'];
        $stock_xl = $_POST['stock_xl'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        $gender = $_POST['gender'];
        $img_status = 0;
        $file = $_FILES['image'];
        if (!empty($file['name'])) {

            $fileName = $_FILES['image']['name'];
            $fileTmpName = $_FILES['image']['tmp_name'];
            $fileSize = $_FILES['image']['size'];
            $fileError = $_FILES['image']['error'];
            $fileType = $_FILES['image']['type'];

            $fileExt = explode('.', $fileName);
            $fileExtActual = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg');

            if (in_array($fileExtActual, $allowed)) {
                if ($fileError == 0) {
                    if ($fileSize < 5000000) {
                        $auto = mysqli_query($con, "SHOW TABLE STATUS LIKE 'items'") or die(mysqli_error($con));
                        $id = mysqli_fetch_assoc($auto)['Auto_increment'];
                        $fileNameNew = "item" . $id . ".jpg";
                        $fileDestination = "../img/item/" . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $img_status = 1;
                    } else {
                        $output2 = 'Your file is too big (Max 5MB)';
                    }
                } else {
                    $output2 = 'There was an eror uploading your file.';
                }
            } else {
                $output2 = 'Incompatible file type.';
            }
        }
        $query = "INSERT INTO items(name,gender,stock_s,stock_m,stock_l,stock_xl,status,description,price,img_status) VALUES ('$name','$gender','$stock_s','$stock_m','$stock_l','$stock_xl','$status','$description','$price', '$img_status')";
        $tambahQuery = mysqli_query($con, $query) or die(mysqli_error($con));
        echo
            '<script>
        alert("Item berhasil dibuat!"); window.location = "../layoutAdmin/showItemAdmin.php";
        </script>';
    }
} else {
    echo
        '<script>
        alert("Failed"); window.history.back();
    </script>';
}
