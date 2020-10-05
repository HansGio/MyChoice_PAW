<?php
include_once '../db.php';
$userId = $_SESSION['user']['id'];
$query = mysqli_query($con, "SELECT shopping_bags.id, shopping_bags.itemid, items.img_status, items.name, items.price, shopping_bags.quantity, shopping_bags.size  FROM shopping_bags INNER JOIN items ON shopping_bags.itemid = items.id WHERE shopping_bags.userid = $userId") or die(mysqli_error($con));
