<?php
include '../dashboard/dashboardUser.php';
include '../process/checkOutUserProcess.php';
?>

<div class="container content">
    <div class="bg-abu pb-5">
        <div class="back">
            <a href="./shoppingBag.php" style="background-color:transparent ;"><i class="text-dark fas fa-reply"></i></a>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: auto; border-radius:10px">
            <h3>Check Out</h3>
        </div>
        <br>


        <!-- Data berupa alamat pembelian saat check out -->
        <div class="dataUser col-sm-10 mx-auto my-3 p-4 rounded" style="background-color: #DBDBDB;">
            <strong>Alamat Pengiriman</strong>
            <hr class="my-2">
            <p class="mb-0"><strong><?= $_SESSION['user']['name'] ?></strong></p>
            <p class="mb-0">0812808021</p>
            <p class="mb-0"><?= $_SESSION['user']['address'] ?></p>
        </div>



        <!-- Butuh php  -->
        <!-- nanti pake foreach lalu data nya pake php -->
        <!-- Data detail pembelian user -->
        <?php
        $bagTotal = 0;
        $shipping = 0;
        while ($item = mysqli_fetch_assoc($query)) {
            $subtotal = $item['price'] * $item['quantity'];
        ?>
            <div class="belanjaan col-sm-10 mx-auto my-3 p-4 rounded">
                <div class="row">
                    <div class="col" style="flex: 0 0 100px;">
                        <img class="rounded" src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['itemid'] ?>.jpg" alt="">
                    </div>

                    <div class="col">
                        <h4><?= $item['name'] ?></h4>
                        <h6 class="my-3">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h6>
                        <small class="d-block">Size: <?= strtoupper($item['size']) ?></small>
                        <small class="d-block">Qty: <?= $item['quantity'] ?></small>
                        <hr class="mt-5">
                        <div class="d-flex justify-content-between">
                            <h6>Subtotal</h6>
                            <h6>Rp. <?= number_format($subtotal, 2, ",", ".") ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $bagTotal += $subtotal;
        }
        $orderTotal = $bagTotal + $shipping;
        ?>
        <!--Batas Foreach -->

        <div class="payment col-sm-10 mx-auto my-3 p-4 rounded" style="background-color: #DBDBDB;">
            <div class="d-flex bd-highlight justify-content-between">
                <div class="px-2 bd-highlight">Bag Total</div>
                <div class="px-2 bd-highlight">Rp. <?= number_format($bagTotal, 2, ",", ".") ?></div>
            </div>
            <div class="d-flex bd-highlight justify-content-between">
                <div class="px-2 bd-highlight">Shipping</div>
                <div class="px-2 bd-highlight">Rp. <?= number_format($shipping, 2, ",", ".") ?></div>
            </div>
            <hr class="my-3">
            <div class="d-flex bd-highlight justify-content-between  mb-3 ">
                <div class="h5 px-2 bd-highlight">Order Total</div>
                <div class="h5 px-2 bd-highlight">Rp. <?= number_format($orderTotal, 2, ",", ".") ?></div>
            </div>
            <a href="../process/paymentUserProcess.php?<?= $bagTotal  ?>">
                <button type="button" class=" btn offset-sm-10 col-sm-2 btn" style="background-color: #FFDCB4;">Pay</button>
            </a>
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