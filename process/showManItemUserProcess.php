<?php
include_once '../db.php';

if (isset($_POST['search'])) {
    $search = $_POST['searchValue'];
    $query = mysqli_query($con, "SELECT * FROM items WHERE gender = 'man' AND name LIKE '%$search%'") or die(mysqli_error($con));
} else {
    $query = mysqli_query($con, "SELECT * FROM items WHERE gender = 'man'") or die(mysqli_error($con));
}
