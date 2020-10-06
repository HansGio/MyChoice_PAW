<?php
include '../dashboard/dashboardUser.php';
include '../process/shoppingBagUserProcess.php';
?>
<link rel="stylesheet" href="../css/checkOutUser.css">

<div class="container content">
    <div class="bg-abu pb-5">
        <div class="back">
            <button><i class="fas fa-reply"></i></button>
        </div>
        <div class="tittle text-center align-items-center col-sm-2 offset-sm-5" style="height: auto; border-radius:10px">
            <h3>Shopping Bag</h3>
        </div>

        <?php
        $total = 0;
        while ($item = mysqli_fetch_assoc($query)) {
        ?>
            <div class="belanjaan col-sm-10 mx-auto my-3 p-4 rounded">
                <div class="row">
                    <div class="col" style="flex: 0 0 100px;">
                        <img class="rounded" src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['itemid'] ?>.jpg" alt="">
                    </div>

                    <div class="col">
                        <h4><?= $item['name'] ?></h4>
                        <small>Size : <?= strtoupper($item['size']) ?></small>
                        <h6 class="mt-5">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h6>
                        <!-- <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary">-</button>
                    <label class="btn btn-secondary">2</label>
                    <button type="button" class="btn btn-secondary">+</button>
                </div> -->
                        <form action="" method="POST" class="mt-3">
                            <button class="btn d-block" type="submit" name="" style="visibility: hidden;"></button>
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">

                            <div class="d-flex justify-content-between">
                                <div class="input-group mb-3 quantity-edit">
                                    <div class="input-group-prepend ">
                                        <button class="btn btn-light border-secondary" type="submit" name="reduce">-</button>
                                    </div>
                                    <input type="text" class="form-control text-center border-secondary" name="quantity" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?= $item['quantity'] ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-light border-secondary" type="submit" name="add">+</button>
                                    </div>
                                </div>
                                <div class="mb-3"><button type="submit" name="delete" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i> Delete</button></div>
                                <!-- untuk ini tambahkan proses delete checkout -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
            $total += $item['quantity'] * $item['price'];
        }
        ?>
        <!-- sampai disini -->


        <!-- checkout -->

        <div class="payment col-sm-10 mx-auto my-3 p-4 rounded" style="background-color: #DBDBDB;">
            <div class="row">
                <div class="total-belanja col-sm-10">
                    <h6>Total Belanja</h6>
                    <!-- Harga nanti diubah menggunakan php -->
                    <h5><strong>Rp. <?= number_format($total, 2, ",", ".") ?></strong></h5>
                </div>
                <div class="align-self-end mt-3 col-sm-2">
                    <a href="checkOutUser.php" class="btn w-100" style="background-color: #FFDCB4;"> Check Out ! </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end checkout -->

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