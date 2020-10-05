<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Edit Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4>Unggah Gambar Produk</h4>
    </div>
    <div class=" form-data">

        <?php
        $id = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM items Where id = '$id' ") or die(mysqli_error($con));
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="name" value="<?php $query['name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock" value="<?= $query['stock_s']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" value="<?= $query['desc']; ?>"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" value="<?= $query['price']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-3">
                        <select id="gender" name="gender" class="form-control" value="<?= $query['email']; ?>">
                            <option selected>Man</option>
                            <option selected>Women</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Size" class="col-sm-2 col-form-label">Ukuran</label>
                    <div class="col-sm-10">
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="S">
                        <label class="form-check-label" for="gridCheck">
                            \t S
                        </label>
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="M">
                        <label class="form-check-label" for="gridCheck">
                            \t M
                        </label>
                        <input class="form-check-input" type="checkbox" id="gridCheck" value="L">
                        <label class="form-check-label" for="gridCheck">
                            \t L
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
                    <button type="button" style="width: 200px; height: 50px;" class="btn btn-danger" name="cancel">Batal</button>
                    <button type="button" style="width: 200px; height: 50px;" class="btn btn-success" name="submit">Submit</button>
                </div>
            </form>
    </div>
</div>
<?php } ?>
</div>
</div>
</div>