<?php
include '../dashboard/dashboardUser.php';
include '../process/showManItemUserProcess.php';
?>
<link rel="stylesheet" href="../css/checkOutUser.css">
<br><br><br>

<div class="container px-5 pb-5 pt-0" style="background-color:#D8DEE5 ;">
    <div class="row">
        <div class="col-4 pt-5">
            <div class="back">
                <a href="" style="background-color:transparent ;"><i class="text-dark fas fa-reply"></i></a>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="d-flex justify-content-center align-items-center w-75" style="height: 100px; background-color: #5FB5EA; color: #FFFFFF;">
                <span class="h2 text-center "> Man </span>
            </div>
        </div>
        <div class="col-4 pt-5">
            <form method="POST">
                <div class="input-group">
                    <input type="text" class="form-control border-secondary border-right-0" name="searchValue" placeholder="Search item.." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-light border-secondary border-left-0" type="submit" name="search"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <!-- <div class="head d-flex">
        <div class="">
            <button class="back" style="background-color:#D8DEE5 ;"><i class="fas fa-reply"></i></button>
        </div>
        <div class="text-center col-sm-2 offset-sm-5  " style="height: 100px; background-color: #5FB5EA; color: #FFFFFF;">
            <h2 class="align-self-center" style="margin-top: 20px;"> Man </h2>
        </div>

        <div class="input-group offset-sm-1 col-sm-3 align-self-center" style=" background-color: white; border: 1px solid black;">
            <input type="text" class="form-control" placeholder="Item Name" aria-label="Recipient's username" aria-describedby="button-addon2" style="border: none;">
            <div class="input-group-append">
                <button class="btn" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div> -->

    <div class="body d-flex flex-wrap justify-content-between">

        <?php
        while ($item = mysqli_fetch_assoc($query)) {
        ?>
            <a href="itemDetails.php?id=<?= $item['id'] ?>" class="card my-4">
                <img class="card-img-top" style="width: 16rem; height: 22rem; object-fit: cover;" src="../img/item/item<?= $item['img_status'] == 0 ? 'default' : $item['id'] ?>.jpg" alt="">
                <div class="card-body ">
                    <h5 class="card-title"><?= $item['name'] ?></h5>
                    <p class="card-text">
                        <?php
                        $size = array();

                        if ($item['stock_s'] > 0) array_push($size, 'S');
                        if ($item['stock_m'] > 0) array_push($size, 'M');
                        if ($item['stock_l'] > 0) array_push($size, 'L');
                        if ($item['stock_xl'] > 0) array_push($size, 'XL');

                        echo implode("/", $size);
                        ?>
                    </p>
                    <h6 class="card-subtitle">Rp. <?= number_format($item['price'], 2, ",", ".") ?></h6>
                </div>
            </a>
        <?php
        }
        ?>
<<<<<<< HEAD


        <!-- sampe sini loop -->



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
=======
    </div>
>>>>>>> 9d48e7b2ea69a618724c13e27ca3f0155d11d02f
