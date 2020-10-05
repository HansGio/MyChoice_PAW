<?php
include '../dashboard/dashboardUser.php';
include '../process/showItemDetailsUser.php';
?>
<link rel="stylesheet" href="../css/checkOutUser.css">
<br><br><br><br><br><br><br>

<div class="container">
    <div class="head">
        <div class="back">
            <button><i class="fas fa-reply"></i></button>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: 50px;">
            <h2>Details</h2>
        </div>
    </div>

    <div class="body offset-sm-1">
        <div class="items d-flex" style="margin: 40px;">
            <img src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['id'] ?>.jpg" alt="" style="width: 250px;">
            <div class="details col-sm-8" style="margin-left: 40px; margin-top: 20px;">
                <!--  Ntar ganti,, ambil dari database php -->
                <!-- Nama produk  -->
                <h3><?= $item['name'] ?></h3>
                <h5 class="py-3">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h5>
                <p class=""><?= $item['desc'] ?></p>

                <form action="">
                    <div class="form-group py-2">
                        <label>Avaible size: </label><br>
                        <?php
                        $i = 0;
                        $size = array();
                        if ($item['stock_s'] > 0) array_push($size, 'S');
                        if ($item['stock_m'] > 0) array_push($size, 'M');
                        if ($item['stock_l'] > 0) array_push($size, 'L');
                        if ($item['stock_xl'] > 0) array_push($size, 'XL');
                        foreach ($size as $value) {
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sizeRadio" id="sizeRadio<?= $i ?>" value="<?= strtolower($value) ?>">
                                <label class="form-check-label" for="sizeRadio<?= $i ?>"><?= $value ?></label>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <button type="submit" class="btn" style="background-color: #A5F1A4;">Add Item!</button>
                </form>

            </div>
        </div>
    </div>

    <br>
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