<?php
include_once '../db.php';

if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $all_items = mysqli_query($con, "SELECT * FROM items WHERE status = '$status'") or die(mysqli_error($con));
} else {
    $all_items = mysqli_query($con, "SELECT * FROM items") or die(mysqli_error($con));
}
