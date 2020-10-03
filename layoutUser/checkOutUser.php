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
            <h2>Check Out</h2>
        </div>
    </div>
    <br>


    <!-- Data berupa alamat pembelian saat check out -->
    <div class="dataUser col-sm-10 offset-sm-1"
        style="background-color: #DBDBDB; border-radius: 10px; padding: 5px; margin-bottom: 20px;">
        <p><strong>Alamat Pengiriman</strong></p>
        <p><strong>Anoynimous</strong></p>
        <p>Anoynimous <br>
            08XXXXXXXXXXX <br>
            Alamat <br>
            Kota <br>
        </p>
    </div>


    <!-- Butuh php  -->
    <!-- nanti pake foreach lalu data nya pake php -->
    <!-- Data detail pembelian user -->
    <div class="belanjaan col-sm-10 offset-sm-1 d-flex ">
        <img src="../img/vIWkY3LiPq.jpg" alt="">
        <div class="detail" style="padding-left: 20px;">
            <h5>Kaus Hitam Latto</h5>
            <p>Rp. 250.000</p>
            <small>Ukuran : XL</small>
            <br>
            <small>Jumlah : 1 </small>
            <div class="border"></div>
            <br>
            <!-- TOLONG BUATIN GARIS BAWAH AKU MENYERAH!! DAN TOLONG BAGIAN SUB TOTAL HARGA BENERIN... BIAR NEMPEL KE SAMPING KANAN  -->
            <div class="border" style="border: black solid 1px;">____________________________________________________
            </div>
            <div class="d-flex bd-highlight mb-3 ">
                <div class="mr-auto p-2 bd-highlight">Sub Total</div>
                <div class="p-2 bd-highlight">Rp. ........</div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="payment col-sm-10 offset-sm-1" style="padding: 20px; background-color: #DBDBDB;">
        <div class="">
            <div class="d-flex bd-highlight mb-3 ">
                <div class="mr-auto p-2 bd-highlight">Total Belanja</div>
                <div class="p-2 bd-highlight">Rp. .......</div>
            </div>
            <div class="d-flex bd-highlight mb-3 ">
                <div class="mr-auto p-2 bd-highlight">Ongkos Kirim</div>
                <div class="p-2 bd-highlight">Rp. ........</div>
            </div>
            <div class="d-flex bd-highlight mb-3 ">
                <div class="mr-auto p-2 bd-highlight">
                    <h5>Total Harga</h5>
                </div>
                <div class="p-2 bd-highlight">Rp. .........</div>
            </div>
            <button type="button" class="offset-sm-11 col-sm-1 btn" style="background-color: #FFDCB4;">Pay</button>
        </div>
    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>


</div>