<?php
include_once '../db.php';

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM items WHERE id LIKE $id LIMIT 1") or die(mysqli_error($con));
$item = mysqli_fetch_assoc($query);

if (isset($_POST['addItem'])) {
    if (isset($_SESSION['isLoginUser'])) {
        if (isset($_POST['size'])) {
            $userid = $_SESSION['user']['id'];
            $itemid = $_GET['id'];
            $size = $_POST['size'];
            $quantity = 1;
            $search = mysqli_query($con, "SELECT * FROM shopping_bags WHERE userid = '$userid' AND itemid = '$itemid' AND size = '$size'") or die(mysqli_error($con));
            if (mysqli_num_rows($search)) {
                $searchedItem = mysqli_fetch_assoc($search);
                $quantity = $quantity + $searchedItem['quantity'];
                $insert = mysqli_query($con, "UPDATE shopping_bags SET quantity = $quantity WHERE userid = '$userid' AND itemid = '$itemid' AND size = '$size'") or die(mysqli_error($con));
            } else {
                $insert = mysqli_query($con, "INSERT INTO shopping_bags(userid, itemid, size, quantity) VALUES ($userid, $itemid, '$size', $quantity)") or die(mysqli_error($con));
            }
            if ($insert) {
                echo '<script>alert("Item added to your shopping bag!");</script>';
            }
        }
    } else {
        echo
            '<script>
                window.location = "../loginUser.php";
            </script>';
    }
}
