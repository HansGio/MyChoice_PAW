<?php
include '../dashboard/dashboardAdmin.php'
?>
<!--sda-->
<div class="title">
    <h2>Edit Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4 class="active-big-menu" style="margin-right: 800px;">Unggah Gambar Produk</h4>
        <!-- <h4>Akrif</h4>
        <h4>NonAktif</h4>
        <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search"> -->

        <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div> -->
        <!-- </div>  <div class="search"> -->

    </div>
    <div class="form-data">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="email@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-3">
                    <select id="inputState" class="form-control">
                        <option selected>Man</option>
                        <option selected>Women</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ukuran</label>
                <div class="col-sm-10">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        \t S
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        \t M
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        \t L
                    </label>
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        \t XL
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        /t Aktif
                    </label>
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        \t Non Aktif
                    </label>
                </div>
            </div>
            <div class="button col-sm-6" style="float: right;">
                <button type="button" style="width: 200px; height: 50px;" class="btn btn-danger">Danger</button>
                <button type="button" style="width: 200px; height: 50px;" class="btn btn-success">Success</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>