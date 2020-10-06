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
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $stock_s = $_POST['stock_s'];
    $stock_m = $_POST['stock_m'];
    $stock_l = $_POST['stock_l'];
    $stock_xl = $_POST['stock_xl'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $img_status = $_POST['img_status'];
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

    // var_dump($status, $name, $stock_s, $stock_m, $stock_l,  $price, $description);

    // $query = ;

    $editQuery = mysqli_query($con, "UPDATE items SET 
    name = '" . $name . "', 
    gender = '" . $gender . "', 
    stock_s = '" . $stock_s . "', 
    stock_m = '" . $stock_m . "', 
    stock_l = '" . $stock_l . "',
    stock_xl = '" . $stock_xl . "',
    status = '" . $status . "',
    description = '" . $description . "',
    img_status = '" . $img_status . "',
    price = '" . $price . "' WHERE id = $id
    ") or die(mysqli_error($con));
    echo
        '<script>
    alert("Edit berhasil"); window.location = "../layoutAdmin/showItemAdmin.php";
    </script>';
} else {
    echo
        '<script>
        alert("Failed"); window.history.back()
    </script>';
}
