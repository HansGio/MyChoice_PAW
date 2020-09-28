<?php
echo '
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom fi">
    <div class="container">
        <a href="#"><img style="height: 40px" src=".\img\logo\logo.png" alt="Logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Hi, Name <i class="fas fa-user-circle fa-lg"
                            aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
'
?>
