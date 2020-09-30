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
                <img class="d-block" src="../img/social-holding.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../img/cute-pink-blur-gradation-wallpaper-preview.jpg" alt="Second slide">
                <img style="min-width: auto;" class="d-block" src="../img/logo9_17_75651.png" alt="">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../img/5aa737ee-d142-476f-b3d8-e863e2b56648-getty-688398000.jpg"
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
    </div><br>
    <div class="row">
        <div class="col">
            <div style="background-color: #95a9e4;" class="h3 py-3 px-4 text-white">Man</div>
        </div>
        <div class="col">
            <div style="background-color: #e49595;" class="h3 py-3 px-4 text-white text-right">Woman</div>
        </div>
    </div>
</div>
</body>

</html>