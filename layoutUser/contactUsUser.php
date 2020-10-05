<?php
include '../dashboard/dashboardUser.php'
?>

<div class="container content">
    <div class="d-flex justify-content-center text-center">
        <div class="col-7">
            <h1>Contact Us</h1>
            <p> Monday - Saturday (08.30 - 17.30) </p>
            <form action="" method="post">
                <div class="form-group col-xs4">
                    <label class="label text-left w-100">Name</label>
                    <input name="name" class="form-control" type="text" placeholder="Name">
                </div>

                <div class="form-group">
                    <label class="label text-left w-100">Email</label>
                    <input name="email" class="form-control" type="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label class="label text-left w-100">Phone Number</label>
                    <input name="phone" class="form-control" type="number" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <label class="label text-left w-100">Message</label>
                    <textarea name="message" class="form-control" type="text" rows="5" placeholder="Type your message here"></textarea>
                </div>

                <div class="field is-grouped">
                    <button name="" Type="button" class="btn btn-primary w-100 mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </section>
</div>
</form>

<!--footer-->

<footer class="footer mt-auto">
    <hr>
    <div class="container-fluid text-center text-md-left" style="padding-left:50px">
         <div class="row">
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase"><i class="fa fa-info-circle"></i> Navigation</h5>
                <ul class="list-unstyled">
                <li>
                    <a href="#!">About</a>
                </li>
                <li>
                    <a href="#!">Help</a>
                </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase"><i class="fa fa-address-card"></i> Contact Info</h5>
                <ul class="list-unstyled">
                <li>
                    <a href="#!">Whatsapp : 021-235-5313</a>
                </li>
                <li>
                    <a href="#!">No Hp : 021-235-5311</a>
                </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-copyright text-center py-3">
        Copyright © 2020 All Right Reserved | My Choice Team
    </div>
</footer>



</html>