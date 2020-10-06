<?php
include_once '../db.php';

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    $all_items = mysqli_query($con, "SELECT * FROM items WHERE status = '$menu'") or die(mysqli_error($con));
} else {
    $all_items = mysqli_query($con, "SELECT * FROM items") or die(mysqli_error($con));
}
