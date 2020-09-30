<?php
include '../db.php'
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">





    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Corner</title>
</head>

<body>
    <div id="app">
        <div class="sidebar">
            <div class="header">
                <img src="../img/logo/logo.png" alt="" style="width: 200px;">
            </div>
            <div class="body">
                <a href="dashboard.html">
                    <div class="item " id="daftar-menu">Daftar Produk</div>
                </a>
                <a href="../layoutAdmin/tambahProdukAdmin.php">
                    <div class="item" id="tambah-menu">Tambah Produk</div>
                </a>
                <a href="#">
                    <div class="item" id="daftar-pesanan">Daftar Pesanan</div>
                </a>
                <a href="#">
                    <div class="item" id="laporan">Laporan</div>
                </a>
                <a href="#">
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