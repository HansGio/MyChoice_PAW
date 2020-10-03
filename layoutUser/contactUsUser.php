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



</html>