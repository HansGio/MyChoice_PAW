<?php
include '../dashboard/dashboardUser.php';
include '../process/showItemDetailsUserProcess.php';
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
                <h3><?= $item['name'] ?></h3>
                <h5 class="py-3">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h5>
                <p class=""><?= $item['desc'] ?></p>

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

    <br>
</div>