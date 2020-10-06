<?php
include '../dashboard/dashboardUser.php'
?>

<div class="container content">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="../img/carousel-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../img/carousel-2.jpg" alt="Second slide">
                <!-- <img style="min-width: auto;" class="d-block" src="../img/logo9_17_75651.png" alt=""> -->
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../img/carousel-3.jpg"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row mb-3 mt-4">
        <div class="col">
            <a href="manListItemUser.php">
                <div style="background-color: #95a9e4;" class="h3 py-3 px-4 text-white">Man</div>
            </a>
        </div>
        <div class="col">
            <a href="womanListItemUser.php">
                <div style="background-color: #e49595;" class="h3 py-3 px-4 text-white text-right">Woman</div>
            </a>
        </div>
    </div>
    <div style="height: 400px; overflow: hidden;" class="row my-4">
        <div class="col-3">
            <img width="100%" height="100%" src="../img/object1.jpg" alt="" style="object-fit: cover;">
        </div>
        <div class="col-3">
            <img width="100%" height="100%" src="../img/object2.jpg" alt="" style="object-fit: cover;">
        </div>
        <div class=" col-3">
            <img width="100%" height="100%" src="../img/object3.jpg" alt="" style="object-fit: cover;">
        </div>
        <div class="col-3">
            <img width="100%" height="100%" src="../img/object4.jpg" alt="" style="object-fit: cover;">
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <a href="recomendationItemUser.php">
                <div style="background-color: #e4bb95;" class="h3 py-3 px-4 text-white">Weekly Recomendation</div>
            </a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <img class="w-100" src="../img/footer.jpg" alt="First slide">
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
</body>

</html>