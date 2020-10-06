<?php
include_once '../db.php';

if (isset($_POST['search'])) {
    $search = $_POST['searchValue'];
    $query = mysqli_query($con, "SELECT * FROM items WHERE status = 'active' AND name LIKE '%$search%' ORDER BY id DESC ") or die(mysqli_error($con));
} else {
    $query = mysqli_query($con, "SELECT * FROM items WHERE status = 'active' ORDER BY id DESC ") or die(mysqli_error($con));
}