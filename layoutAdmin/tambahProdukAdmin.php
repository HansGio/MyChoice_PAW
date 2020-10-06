<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Tambah Produk</h2>
</div>
<br>
<div class="container">
    <div class=" form-data">
        <form method="POST" action="../process/createItemAdmin.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Upload Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 40px;" id="basic-addon1">S</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Size S" name="stock_s">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 40px;" id="basic-addon1">M</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Size M" name="stock_m">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 40px;" id="basic-addon1">L</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Size L" name="stock_l">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="width: 40px;" id="basic-addon1">XL</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Size XL" name="stock_xl">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" rows="5" name="description"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class=" col-sm-10 input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                    </div>
                    <input type="number" class="form-control" placeholder="Harga" name="price">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-3">
                    <select class="form-control" name="gender">
                        <option selected disabled>Select one...</option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="aktif" value="active">
                        <label class="form-check-label font-weight-normal" for="aktif">Aktif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="nonaktif" value="non-active">
                        <label class="form-check-label font-weight-normal" for="nonaktif">Nonaktif</label>
                    </div>
                </div>
            </div>

            <div class="button col-sm-6" style="float: right;">
                <button type="button" style="width: 200px; height: 50px;" class="btn btn-danger" name="cancel" onclick="window.history.back()">Batal</button>
                <button type="submit" style="width: 200px; height: 50px;" class="btn btn-success" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>