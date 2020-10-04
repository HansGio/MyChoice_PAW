<?php
include '../dashboard/dashboardUser.php'
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
            <form action="">
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

    <!-- Ini bagian Item nya.. yang atas udah fix  -->
    <!-- Ini masih pake data dummmy... ntr di loop aja bagian itu -->

    <div class="body d-flex flex-wrap justify-content-around">

        <!-- dari sini -->
        <?php
        for ($x = 0; $x <= 10; $x++) {
        ?>
            <div class="card my-4">
                <img class="card-img-top" style="width: 16rem; height: 22rem; object-fit: cover;" src="../img/vIWkY3LiPq.jpg" alt="">
                <div class="card-body ">
                    <h5 class="card-title">Kaos Putih</h5>
                    <p class="card-text">S/M/XL</p>
                    <h6 class="card-subtitle">Rp. 250.000,-</h6>
                </div>
            </div>
        <?php
        }
        ?>


        <!-- sampe sini loop -->



    </div>