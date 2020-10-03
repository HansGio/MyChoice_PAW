<?php
include '../dashboard/dashboardUser.php'
?>
<link rel="stylesheet" href="../css/checkOutUser.css">
<br><br><br><br><br><br><br>

<div class="container">
    <div class="head">
        <div class="back">
            <button style="float: left; border: none; font-size: 40px;"><i class="fas fa-reply"></i></button>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: 50px;">
            <h2>Details</h2>
        </div>
    </div>

    <div class="body offset-sm-1">
        <div class="items d-flex" style="margin: 40px;">
            <img src="../img/vIWkY3LiPq.jpg" alt="" style="width: 250px;">
            <div class="details col-sm-8" style="margin-left: 40px; margin-top: 20px;">
                <!--  Ntar ganti,, ambil dari database php -->
                <!-- Nama produk  -->
                <h3>Green Bluse</h3>
                <p>Avaible Size <br> S/M/L/XL</p>
                <p class="">Green Blouse merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore</p>

                <form action="">
                    <div class="d-flex">
                        <input type="radio" name="gender">S<br>
                        <input type="radio" name="gender">M<br>
                        <input type="radio" name="gender">L<br>
                        <input type="radio" name="gender">XL<br>
                    </div>
                </form>

                <div class="d-flex">
                    <h3>Rp. 250.000</h3>
                    <button class="btn" style="margin-left: 100px; background-color: #A5F1A4;">Add Item!</button>
                </div>

            </div>
        </div>
    </div>

    <br>
</div>