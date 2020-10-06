<?php
include_once '../db.php';












// $userId = $_SESSION['user']['id'];

// if (isset($_POST['quantity'])) {
//     $bagId = $_POST['id'];
//     $quantity = $_POST['quantity'];
//     if (isset($_POST['add'])) {
//         $quantity++;
//     } else if (isset($_POST['reduce'])) {
//         $quantity--;
//     }
//     $update = mysqli_query($con, "UPDATE shopping_bags SET quantity = $quantity WHERE id = $bagId") or die(mysqli_error($con));
// }
// if (isset($_POST['delete'])) {
//     $bagId = $_POST['id'];
//     $delete = mysqli_query($con, "DELETE FROM shopping_bags WHERE id = $bagId") or die(mysqli_error($con));
// }

// $pay = "SELECT  users.name, users.address, 
// items.img_status, items.name, items.price, shopping_bags.quantity, shopping_bags.size,
// order_list.id, order_list.items_id, order_list.total_price, order_list.delivery_status 
// FROM order_list INNER JOIN items ON order_list.items_id = items.id
// INNER JOIN users ON order_list.user_id = users.id"


// $query = mysqli_query($con, "SELECT  users.name, users.address, 

// items.img_status, items.name, items.price, 
// order_list.id, order_list.items_id, order_list.total_price, order_list.delivery_status,
// shopping_bags.quantity, shopping_bags.size,

// FROM order_list INNER JOIN items ON order_list.items_id = items.id
// INNER JOIN users ON order_list.user_id = users.id
// INNER JOIN shopping_bags ON shopping_bags.userid = 

// ") or die(mysqli_error($con));

// var_dump("$query");