<?php
include_once '../db.php';

if (isset($_POST['search'])) {
    $search = $_POST['searchValue'];
    $query = mysqli_query($con, "SELECT * FROM items WHERE gender = 'woman' AND name LIKE '%$search%'") or die(mysqli_error($con));
} else {
    $query = mysqli_query($con, "SELECT * FROM items WHERE gender = 'woman'") or die(mysqli_error($con));
}
