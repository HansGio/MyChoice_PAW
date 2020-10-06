<?php
session_start();
if ($_SESSION['isLoginAdmin']) {
    header('location: layoutAdmin');
} else {
    header('location: layoutUser');
}
