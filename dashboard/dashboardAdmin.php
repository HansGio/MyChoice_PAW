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



    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Corner</title>
</head>

<body>
    <div id="app">
        <div class="sidebar">
            <div class="header">
                <img src="../img/logo/logo.png" alt="" style="height: 100px; width: 200px;">
            </div>
            <div class="body" onclick="checkHamburgerMenu()">
                <a href="dashboard.html">
                    <div class="item " id="daftar-menu">Daftar Produk</div>
                </a>
                <a href="employee.html">
                    <div class="item" id="tambah-menu">Tambah Produk</div>
                </a>
                <a href="employee.html">
                    <div class="item" id="daftar-pesanan">Daftar Pesanan</div>
                </a>
                <a href="employee.html">
                    <div class="item" id="laporan">Laporan</div>
                </a>
                <a href="employee.html">
                    <div class="item" id="keluar">Keluar</div>
                </a>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <div class="hamburger" onclick="toogleSidebar()">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="title">
                    <h2>Daftar Produk</h2>
                </div>
            </div>
            <div class="body">
                <div class="big-menu">
                    <h4 class="active-big-menu"> Semua Produk</h4>
                    <h4>Akrif</h4>
                    <h4>NonAktif</h4>
                    <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search">

                    <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div> -->

                    <!-- </div>
                    <div class="search"> -->
                </div>
                <table class="table table-hover">
                </table>
            </div>
        </div>
    </div>
    </div>

    <script src="../js/script.js"></script>