<?php
session_start();
include '../db.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--    INI FRAMEWORK BOOTSRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- style  -->
    <link type="text/css" rel="stylesheet" href="../css/styleUser.css" />
    <link rel="icon" type="image/png" href="../img/favicon/favicon.png" />

    <!--   INI KHUSUS FONT     -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!--   SCRIPT     -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>MyChoice</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom fi">
        <div class="container">
            <a href="#"><img style="height: 40px" src="../img/logo/logo.png" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutUser.php">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUsUser.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-bag fa-lg" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <div style="
							height: 30px;
							width: 1px;
							background-color: rgb(145, 145, 145);
							margin: 0px 10px;
						"></div>
                <ul class="navbar-nav">
                    <?php
                    if ($_SESSION['isLogin']) {
                        echo '
                        <li class="nav-item">
                        <a class="nav-link" href="#">Hi, ' . $_SESSION['user']['name'] . '<i class="fas fa-user-circle fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../process/logoutUserProcess.php"><i class="fas fa-sign-out-alt fa-lg" aria-hidden="true"></i></a>
                        </li>';
                    } else {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="../loginUser.php"><i class="fas fa-sign-in-alt fa-lg" aria-hidden="true"></i></a>
                        </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>