<?php
include '../../index.php'
?>
<div class="container text-center min-vh-100">
    <img width="250px" class="pt-4" src="../../img/logo/logo.png" alt="">
    <div class=" d-flex pt-5 justify-content-around">

        <div class=" px-5">
            <div style="width: 450px;" class="shadow card p-5 mb-5 text-center">
                <form>
                    <h1 class="text-center">Sign Up</h1>
                    <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name_register" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email_register" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="birth_date_register" onfocus="(this.type='date')" placeholder="Birth Date">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="gender" id="gender">
                            <option value="" selected disabled>Select Gender</option>
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_register" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_register" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="adress_register" rows="3" placeholder="Address"></textarea>
                    </div>
                    <button type="submit" class="my-3 btn btn-dark w-100">Register</button>
                    <small>Already have an account? <a href="#">Login Here</a></small>
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