<?php
include '../dashboard/dashboardUser.php';
include '../process/shoppingBagUserProcess.php';
?>
<link rel="stylesheet" href="../css/checkOutUser.css">
<br><br><br><br><br><br><br>

<div class="container bg-abu">
    <div class="head">
        <div class="back">
            <button><i class="fas fa-reply"></i></button>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: 50px;">
            <h2>Shopping Bag</h2>
        </div>
    </div>

    <?php
    $total = 0;
    while ($item = mysqli_fetch_assoc($query)) {
    ?>
        <!-- Bagian ini di loop sesuai banyak nya belanjaan -->
        <div class="belanjaan col-sm-10 offset-sm-1 d-flex" style="margin-top: 50px;">
            <img src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['itemid'] ?>.jpg" alt="">
            <div class="detail col-sm-10" style="padding-left: 20px;">
                <h5><?= $item['name'] ?></h5>
                <small>Size : <?= strtoupper($item['size']) ?></small>
                <br><br>
                <p>Rp. <?= number_format($item['price'], 2, ",", ".") ?></p>
                <!-- <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">-</button>
                <label class="btn btn-secondary">2</label>
                <button type="button" class="btn btn-secondary">+</button>
            </div> -->
                <form action="" method="POST">
                    <button class="btn" type="submit" name="" style="visibility: hidden;"></button>
                    <div class="input-group mb-3 quantity-edit">
                        <div class="input-group-prepend ">
                            <button class="btn btn-light border-secondary" type="submit" name="reduce">-</button>
                        </div>
                        <input type="text" class="form-control text-center border-secondary" name="quantity" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?= $item['quantity'] ?>">
                        <div class="input-group-append">
                            <button class="btn btn-light border-secondary" type="submit" name="add">+</button>
                        </div>
                    </div>
                    <br>

                    <div class="d-flex flex-row-reverse ">
                        <!-- untuk ini tambahkan proses delete checkout -->
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <div class="p-2 "><button type="submit" name="delete" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i> Delete</button></div>
                    </div>
                </form>

                <div class="d-flex  mb-3 ">
                    <div class="mr-auto p-2 ">
                        <h5 style="float: right;"></h5>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    <?php
        $total += $item['quantity'] * $item['price'];
    }
    ?>
    <!-- sampai disini -->


    <!-- checkout -->
    <div class="want-checkout col-sm-10 offset-sm-1" style="background-color: #DBDBDB;">
        <div class=" d-flex">
            <div class="total-belanja col-sm-10">
                <h5>Total Belanja</h5>
                <!-- Harga nanti diubah menggunakan php -->
                <h5><strong>Rp. <?= number_format($total, 2, ",", ".") ?></strong></h5>
            </div>
            <div>
                <br>
                <button type="button" class="btn" style="background-color: #FFDCB4;"> Check Out ! </button>
            </div>
        </div>
    </div>
    <!-- end checkout -->

</div>