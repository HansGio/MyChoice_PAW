<?php

if (isset($_POST['submit'])) {
    include_once '../db.php';

    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone_number']) ||
        !isset($_POST['message'])
    ) {
        echo
            '<script>
        alert("Field tidak boleh kosong"); window.history.back()
    </script>';
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    // var_dump($status, $name, $stock_s, $stock_m, $stock_l,  $price, $desc);

    // $query = ;

    $editQuery = mysqli_query($con, "INSERT INTO contact_us VALUES ('$id', '$name','$email','$phone_number','$message') ") or die(mysqli_error($con));
    echo
        '<script>
    alert("Success Send");window.location = "../layoutUser";
</script>';
} else {
    echo
        '<script>
        alert("Failed"); window.history.back()
    </script>';
}