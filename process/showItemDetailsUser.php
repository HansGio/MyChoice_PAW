<?php
include_once '../db.php';

$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM items WHERE id LIKE $id LIMIT 1") or die(mysqli_error($con));
$item = mysqli_fetch_assoc($query);
