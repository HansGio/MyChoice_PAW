<?php
include '../db.php';

$messages = mysqli_query($con, "SELECT * FROM contact_us ORDER BY id ASC") or die(mysqli_error($con));