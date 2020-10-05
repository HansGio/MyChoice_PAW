<?php
include '../dashboard/dashboardUser.php'
?>

<div class="container content">
    <div class="bg-abu">
        <div class="head">
            <div class="back">
                <button><i class="fas fa-reply"></i></button>
            </div>
            <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: auto; border-radius:10px">
                <h3>Check Out</h3>
            </div>
        </div>
        <br>


        <!-- Data berupa alamat pembelian saat check out -->
        <div class="dataUser col-sm-10 offset-sm-1"
            style="background-color: #DBDBDB; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
            <p><strong>Alamat Pengiriman</strong></p>
            <hr>
            <p>Nama : </p>
            <p>No. Telp : </p>
            <p>Alamat :</p>
            <p>Kota : </p>
        </div>
       


    <!-- Butuh php  -->
    <!-- nanti pake foreach lalu data nya pake php -->
    <!-- Data detail pembelian user -->
    <div class="belanjaan col-sm-10 offset-sm-1 d-flex" style="padding:20px; margin-bottom:20px;" >
        <img src="../img/vIWkY3LiPq.jpg" alt="">
        <div class="detail col-sm-10" style="padding-left: 20px;">
            <h5>Nama Barang</h5>
            <p>Harga</p>
            <p> Ukuran : </p>
            <p> Jumlah : </p>
            <div class="border"></div>
            <div class="d-flex bd-highlight mb-3 ">
                <div class="mr-auto p-2 bd-highlight">Sub Total</div>
                <div class="p-2 bd-highlight">Total Harga</div>
            </div>
        </div>
    </div>

    <!--Batas Foreach -->

    <div class="payment col-sm-10 offset-sm-1" style="padding:10px; margin-bottom:20px; background-color: #DBDBDB; border-radius:10px">
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
        <button type="button" class=" btn offset-sm-11 col-sm-1 btn" style="background-color: #FFDCB4;">Pay</button>
    </div>

    </div> 

</div>

<!--footer-->

<footer class="footer mt-auto">
    <hr>
    <div class="container-fluid text-center text-md-left" style="padding-left:50px">
         <div class="row">
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase"><i class="fa fa-info-circle"></i> Navigation</h5>
                <ul class="list-unstyled">
                <li>
                    <a href="#!">About</a>
                </li>
                <li>
                    <a href="#!">Help</a>
                </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase"><i class="fa fa-address-card"></i> Contact Info</h5>
                <ul class="list-unstyled">
                <li>
                    <a href="#!">Whatsapp : 021-235-5313</a>
                </li>
                <li>
                    <a href="#!">No Hp : 021-235-5311</a>
                </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-copyright text-center py-3">
        Copyright © 2020 All Right Reserved | My Choice Team
    </div>
</footer>

</html>