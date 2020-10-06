<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Edit Produk</h2>
</div>
</div>
<div class="body">
    <div class="container">

        <div class=" form-data">

            <?php
            $id = $_GET['id'];
            $query = mysqli_query($con, "SELECT * FROM items Where id = '$id' ") or die(mysqli_error($con));
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <form method="POST" action="../process/updateItemAdmin.php" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id" value="<?= $data['id']; ?>">
                    <input type="hidden" id="img_status" name="img_status" value="<?= $data['img_status']; ?>">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="name" value="<?= $data['name']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px;" id="basic-addon1">S</span>
                                </div>
                                <input type="number" class="form-control" placeholder="Size S" name="stock_s" value="<?= $data['stock_s']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px;" id="basic-addon1">M</span>
                                </div>
                                <input type="number" class="form-control" placeholder="Size M" name="stock_m" value="<?= $data['stock_m']; ?>">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px;" id="basic-addon1">L</span>
                                </div>
                                <input type="number" class="form-control" placeholder="Size L" name="stock_l" value="<?= $data['stock_l']; ?>">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="width: 40px;" id="basic-addon1">XL</span>
                                </div>
                                <input type="number" class="form-control" placeholder="Size XL" name="stock_xl" value="<?= $data['stock_xl']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="deskripsi" rows="5" name="description"><?= $data['description']; ?>"</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class=" col-sm-10 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                            </div>
                            <input type="number" class="form-control" placeholder="Harga" name="price" value="<?= $data['price']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="gender">
                                <option disabled>Pilih satu...</option>
                                <option value="man" <?= $data['gender'] == 'man' ? 'selected' : '' ?>>Man</option>
                                <option value="woman" <?= $data['gender'] == 'woman' ? 'selected' : '' ?>>Woman</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="aktif" value="active" <?= $data['status'] == 'active' ? 'checked' : '' ?>>
                                <label class="form-check-label font-weight-normal" for="aktif">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="nonaktif" value="non-active" <?= $data['status'] == 'non-active' ? 'checked' : '' ?>>
                                <label class="form-check-label font-weight-normal" for="nonaktif">Nonaktif</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-sm-2 ml-auto mb-3">
                            <button type="button" class="btn btn-danger w-100" name="cancel" onclick="window.history.back()">Batal</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success w-100" name="submit">Submit</button>
                        </div>
                    </div>
                    <div class="button col-sm-6" style="float: right;">
                    </div>
                </form>
        </div>
    </div>
</div>
<?php } ?>
</div>
</div>
</div>