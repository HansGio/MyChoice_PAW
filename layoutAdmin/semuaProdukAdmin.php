<?php
include '../dashboard/dashboardAdmin.php'
?>

<div class="title">
    <h2>Daftar Produk</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h5><a href="semuaProdukAdmin.php" style="border-bottom: 5px solid #4b6584;">Semua Produk</a></h5>
        <h5><a href="produkAktifAdmin.php">Aktif</a></h5>
        <h5><a href="produkNonAktifAdmin.php">NonAktif</a></h5>
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
                <th>Stok #</th>
                <th>Status</th>
                <th>Pengaturan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items = mysqli_query($con, "SELECT * FROM items") or die(mysqli_error($con));
            if (mysqli_num_rows($all_items) == 0) {
                echo '<tr><td colspan="7"> Tidak ada data </td>
            </tr>';
            } else {
                $no = 1;
                while ($all_item = mysqli_fetch_assoc($all_items)) {
            ?>
                    <tr>
                        <td> <?= $no ?></td>
                        <td>
                            <div class="d-flex">
                                <img src="../img/item/item<?= $all_item['img_status'] == 0 ? 'default' : $all_item['id'] ?>.jpg" alt="" style="width: 75px; ">
                                <div class="offset-1">
                                    <h6>
                                        <?= $all_item['name'] . ($all_item['gender'] == 'man' ? ' <i class="fas fa-mars"></i>' : ' <i class="fas fa-venus"></i>') ?>
                                    </h6>
                                    <small>
                                        Ukuran:
                                        <?php
                                        $size = array();

                                        if ($all_item['stock_s'] > 0) array_push($size, 'S');
                                        if ($all_item['stock_m'] > 0) array_push($size, 'M');
                                        if ($all_item['stock_l'] > 0) array_push($size, 'L');
                                        if ($all_item['stock_xl'] > 0) array_push($size, 'XL');

                                        echo implode("/", $size);
                                        ?>
                                    </small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h6>Rp. <?= number_format($all_item['price'], 2, ",", ".") ?></h6>
                        </td>
                        <td>
                            <h6>
                                Total = <?php $hasil = ($all_item['stock_s'] + $all_item['stock_m'] + $all_item['stock_l'] + $all_item['stock_xl']);
                                        echo $hasil; ?>
                            </h6>
                            <small class="d-block">S = <?= $all_item['stock_s'] ?></small>
                            <small class="d-block">M = <?= $all_item['stock_m'] ?></small>
                            <small class="d-block">L = <?= $all_item['stock_l'] ?></small>
                            <small class="d-block">XL = <?= $all_item['stock_xl'] ?></small>
                        </td>
                        <td><?= '<div class="rounded text-white text-center ' . ($all_item['status'] == 'active' ? 'bg-success">Aktif</div>' : 'bg-danger">Nonaktif</div>') ?></td>
                        <td>
                            <h3>
                                <a href="./editItemAdmin.php?id=<?= $all_item['id'] ?>"><i class="fas fa-edit"></i></a>
                                <a href="../process/deleteitemAdmin.php?id= <?= $all_item['id'] ?>" onClick="return confirm ( 'Yakin?')"><i class="fa fa-trash"></i></a>
                            </h3>
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