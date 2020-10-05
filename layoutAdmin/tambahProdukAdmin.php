<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Tambah Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4>Unggah Gambar Produk</h4>
    </div>
    <div class=" form-data">
        <form method="POST" action="../process/tambahItemAdmin.php">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Nama Produk" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock_s" class="col-sm-2 col-form-label">Stock Size S</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock_s" placeholder="Stock" name="stock_s">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock_m" class="col-sm-2 col-form-label">Stock Size M</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock_m" placeholder="Stock" name="stock_m">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock_l" class="col-sm-2 col-form-label">Stock Size L</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock_l" placeholder="Stock" name="stock_l">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock_xl" class="col-sm-2 col-form-label">Stock Size XL</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock_xl" placeholder="Stock" name="stock_xl">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" rows="5" name="desc"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Harga">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-3">
                    <select id="gender" name="gender" class="form-control">
                        <option value="man">Man</option>
                        <option value="women">Women</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <!-- AKTIF -->
                    <label class="form-check-label" for="active">
                        <input type="radio" name="status" id="active" value="active">
                        Aktif
                    </label>
                    <!-- NON AKTIF -->
                    <label class="form-check-label" for="non-active">
                        <input type="radio" name="status" id="non-active" value="non-active">
                        Non Aktif
                    </label>
                </div>
            </div>

            <div class="button col-sm-6" style="float: right;">
                <button type="button" style="width: 200px; height: 50px;" class="btn btn-danger" name="cancel"
                    onclick="window.history.back()">Batal</button>
                <button type="submit" style="width: 200px; height: 50px;" class="btn btn-success"
                    name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>