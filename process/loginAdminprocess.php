<?php

if(isset($_POST['submmit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from admin where username = '$username' and password ='$password'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if ($row == 1) {
            echo "login successful";
            $_SESSION['username'] = $username;
            header('location:dashboard/dashboardAdmin.php');
        }
    
        else{
            echo "login failed";
            header('location:loginAdmin.php');
        }
    
}
