<?php

if (isset($_POST['submit'])) {
    include_once '../db.php';

    if (
        !isset($_POST['name']) ||
        !isset($_POST['stock_s']) ||
        !isset($_POST['stock_m']) ||
        !isset($_POST['stock_l']) ||
        !isset($_POST['stock_xl']) ||
        !isset($_POST['desc']) ||
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
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $query = "INSERT INTO items VALUES ('$name','$stock_s','$stock_m','$stock_l','$stock_xl','$desc','$price','$status','$gender')";



    $tambahQuery = mysqli_query($con, $query) or die(mysqli_error($con));
    echo
        '<script>
    alert("Edit berhasil"); window.history.back()
</script>';
} else {
    echo
        '<script>
        alert("Failed"); window.history.back()
    </script>';
}