<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--    INI FRAMEWORK BOOTSRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/favicon/favicon.png" />

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
    <div class="container text-center min-vh-100">
        <img width="250px" class="pt-4" src="img/logo/logo.png" alt="">
        <div class=" d-flex pt-5 justify-content-around">

            <div class=" px-5">
                <div style="width: 450px;" class="shadow card p-5 mb-5 text-center">
                    <form action="">
                        <h1 class="text-center">Sign Up</h1>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="birth_date" onfocus="(this.type='date')" placeholder="Birth Date">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="" selected disabled>Select Gender</option>
                                <option value="man">Man</option>
                                <option value="woman">Woman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="address" rows="3" placeholder="Address"></textarea>
                        </div>
                        <button type="submit" name="register" class="my-3 btn btn-dark w-100">Register</button>
                        <small>Already have an account? <a href="loginUser.php">Login Here</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">

        </div>

    </div>

</body>

</html>