<?php
include '../dashboard/dashboardUser.php';
include '../process/showItemDetailsUserProcess.php';
?>
<link rel="stylesheet" href="../css/checkOutUser.css">

<div class="container content">
    <div class="bg-abu pb-5 head">
        <div class="back">
            <a href="<?= $item['gender'] ?>ListItemUser.php"><i class="text-dark fas fa-reply"></i></a>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5"
            style="height: auto; border-radius:10px">
            <h3>Details</h3>
        </div>
    

    <div class="body offset-sm-1">
        <div class="items d-flex" style="margin: 40px;">
            <img src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['id'] ?>.jpg" alt="" style="width: 250px;">
            <div class="details col-sm-8" style="margin-left: 40px; margin-top: 20px;">
                <h3><?= $item['name'] ?></h3>
                <h5 class="py-3">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h5>
                <p class=""><?= $item['description'] ?></p>

                <form action="" method="POST">
                    <div class="form-group py-2">
                        <label>Avaible size: </label><br>
                        <?php
                        $size = array();

                        if ($item['stock_s'] > 0) array_push($size, 'S');
                        if ($item['stock_m'] > 0) array_push($size, 'M');
                        if ($item['stock_l'] > 0) array_push($size, 'L');
                        if ($item['stock_xl'] > 0) array_push($size, 'XL');

                        foreach ($size as $value) {
                        ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="size" id="sizeRadio<?= $value ?>" value="<?= strtolower($value) ?>">
                                <label class="form-check-label" for="sizeRadio<?= $value ?>"><?= $value ?></label>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['id'] ?>" />
                    <button type="submit" class="btn" name="addItem" style="background-color: #A5F1A4;">Add Item!</button>
                </form>

            </div>
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