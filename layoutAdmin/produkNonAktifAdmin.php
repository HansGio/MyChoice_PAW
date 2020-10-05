<?php
include '../dashboard/dashboardAdmin.php'
?>

<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<div class="title">
    <h2>Daftar Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4><a href="semuaProdukAdmin.php">Semua Produk</a></h4>
        <h4><a href="produkAktifAdmin.php">Aktif</a></h4>
        <h4><a href="produkNonAktifAdmin.php" style="border-bottom: 5px solid #4b6584;">NonAktif</a></h4>
        <!-- <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search"> -->

        <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div> -->

        <!-- </div>
                    <div class="search"> -->
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi Produk</th>
                <th>Harga $</th>
                <th>Size</th>
                <th>Stock #</th>
                <th>Status</th>
                <th>Pengaturan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items = mysqli_query($con, "SELECT * FROM items where status LIKE 'non-aktif' ") or die(mysqli_error($con));
            if (mysqli_num_rows($all_items) == 0) {
                echo '<tr?><td colspan="7"> Tidak ada data </td>
            </tr>';
            } else {
                $no = 1;
                while ($all_item = mysqli_fetch_assoc($all_items)) {
            ?>
                    <tr>
                        <td> <?= $no ?></td>
                        <td>
                            <div class="d-flex">
                                <img src="../img/item/item<?= $all_item['img_status'] == 0 ? 'default' : $all_item['id'] ?>.jpg" alt="" style="width: 100px; ">
                                <div class="offset-1">
                                    <?php $all_item['name'] ?>
                                    <br>
                                    Size S/M/L/XL
                                </div>
                            </div>
                        </td>
                        <td><?= $all_item['price'] ?></td>
                        <td>stock S = <?= $all_item['stock_s'] ?> <br>
                            stock M = <?= $all_item['stock_m'] ?> <br>
                            stock L = <?= $all_item['stock_l'] ?> <br>
                        </td>
                        <td>
                            <?php $hasil = ($all_item['stock_s'] + $all_item['stock_m'] + $all_item['stock_l']);
                            echo $hasil;
                            ?> <br>
                        </td>
                        <td><?= $all_item['status'] ?></td>
                        <td>
                            <a href="./editItemAdmin.php?id=<?= $all_item['id'] ?>" style="font-size: 40px;"><i class="fas fa-edit"></i></a>
                            <a href="../process/deleteitemAdmin.php?id= <?= $all_item['id'] ?>" onClick="return confirm ( 'Yakin?')" style="font-size: 40px;"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

            <?php
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>