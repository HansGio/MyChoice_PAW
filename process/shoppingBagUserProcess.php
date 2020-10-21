<?php
include_once '../db.php';

if (isset($_SESSION['isLoginUser'])) {

    $userId = $_SESSION['user']['id'];

    if (isset($_POST['quantity'])) {
        $bagId = $_POST['id'];
        $quantity = $_POST['quantity'];
        if (isset($_POST['add'])) {
            $quantity++;
        } else if (isset($_POST['reduce'])) {
            $quantity--;
        }
        $update = mysqli_query($con, "UPDATE shopping_bags SET quantity = $quantity WHERE id = $bagId") or die(mysqli_error($con));
    }
    if (isset($_POST['delete'])) {
        $bagId = $_POST['id'];
        $delete = mysqli_query($con, "DELETE FROM shopping_bags WHERE id = $bagId") or die(mysqli_error($con));
    }
    $query = mysqli_query($con, "SELECT shopping_bags.id, shopping_bags.itemid, items.img_status, items.name, items.price, shopping_bags.quantity, shopping_bags.size  FROM shopping_bags INNER JOIN items ON shopping_bags.itemid = items.id WHERE shopping_bags.userid = $userId") or die(mysqli_error($con));
} else {
    echo '<script>
    window.location = "../loginUser.php"
</script>';
}
