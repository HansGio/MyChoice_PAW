<?php
include '../../index.php'
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <form>
            <br><br><br><br>
            <h1 class="text-center">Sign Up</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="form-group">
                <input type="text" class="form-control" id="name_register" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email_register" aria-describedby="emailHelp"
                    placeholder="Email">-
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="birth_date_register" placeholder="Birth Date">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="gender_register" placeholder="Select gender">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password_register" placeholder="Password">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="adress_register" rows="3" placeholder="Address"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary col-12">Log In</button>
            <br><br><br><br>
            <p style="font-size: small;" class="text-center">By signin up you agree to our <br> Terms & Conditions</p>
        </form>
    </div>

</div>

</body>

</html>