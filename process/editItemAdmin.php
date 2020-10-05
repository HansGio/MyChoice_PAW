<?php

if (isset($_POST['submit'])) {
    include_once '../db.php';

    $editQuery = mysqli_query($con, "SELECT * FROM items Where id = 'id' ") or die(mysqli_error($con));

    var_dump($editQuery);
}
