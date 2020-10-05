<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Daftar Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4><a href="semuaProdukAdmin.php" style="border-bottom: 5px solid #4b6584;">Semua Produk</a></h4>
        <h4><a href="produkAktifAdmin.php">Aktif</a></h4>
        <h4><a href="produkNonAktifAdmin.php">NonAktif</a></h4>
        <!-- <div class="search-box col-sm-2">
            <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search Items">
            <a href="" class="search-btn"><i class="fas fa-search"></i></a>
        </div> -->

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
            $all_items = mysqli_query($con, "SELECT * FROM items") or die(mysqli_error($con));
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
                        <img src="../img/item/item<?= $all_item['img_status'] == 0 ? 'default' : $all_item['id'] ?>.jpg"
                            alt="" style="width: 100px; ">
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
                    <a href="./editItemAdmin.php?id=<?= $all_item['id'] ?>" style="font-size: 40px;"><i
                            class="fas fa-edit"></i></a>
                    <a href="../process/deleteitemAdmin.php?id= <?= $all_item['id'] ?>"
                        onClick="return confirm ( 'Yakin?')" style="font-size: 40px;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>

            <?php
                    $no++;
                }
            }
            ?>
            <h1></h1>
        </tbody>
    </table>
</div>
</div>
</div>
</div>