<?php
include_once '../db.php';
session_start();
if (!isset($_SESSION['isLoginAdmin']))
    header('Location:../loginAdmin.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/styleAdmin.css">


    <!-- FONT -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Corner</title>
</head>

<body>
    <div id="app">
        <div class="sidebar">
            <div class="header">
                <img src="../img/logo/logo.png" alt="" style="width: 200px;">
            </div>
            <div class="body">
                <a href="../layoutAdmin/semuaProdukAdmin.php">
                    <div class="item " id="daftar-menu">Daftar Produk</div>
                </a>
                <a href="../layoutAdmin/tambahProdukAdmin.php">
                    <div class="item" id="tambah-menu">Tambah Produk</div>
                </a>
                <a href="../layoutAdmin/orderListAdmin.php">
                    <div class="item" id="daftar-pesanan">Daftar Pesanan</div>
                </a>
                <a href="../layoutAdmin/reportAdmin.php">
                    <div class="item" id="laporan">Laporan</div>
                </a>
                <a href="../process/logoutAdminProcess.php">
                    <div class="item" id="keluar">Keluar</div>
                </a>
            </div>
        </div>
        <script src="../js/script.js"></script>
        <div class="content">
            <div class="header">
                <div class="hamburger" onclick="toogleSidebar()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>