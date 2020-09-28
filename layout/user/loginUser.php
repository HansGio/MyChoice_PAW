<?php
include '../../index.php'
?>

<div class="container">
    <div class="col-4">
        <form>
            <h1 class="text-center">Log In</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="form-group">
                <label for="email_input">Email address</label>
                <input type="email" class="form-control" id="email_login" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="password_input">Password</label>
                <input type="password" class="form-control" id="password_login" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>
</div>


</body>

</html>