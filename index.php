<?php
session_start();
if ($_SESSION['isLoginAdmin']) {
    header('location: dashboard/dashboardAdmin.php');
} else {
    header('location: layoutUser');
}