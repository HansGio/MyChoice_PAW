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
        <h4><a href="produkAktifAdmin.php" style="border-bottom: 5px solid #4b6584;">Aktif</a></h4>
        <h4><a href="produkNonAktifAdmin.php">NonAktif</a></h4>
        <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search">
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Informasi Produk</th>
                <th>Harga $</th>
                <th>Stock #</th>
                <th>Status</th>
                <th>Pengaturan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items = mysqli_query($con, "SELECT * FROM item_list where status LIKE 'aktif' ") or die(mysqli_error($con));

            if (mysqli_num_rows($all_items) == 0) {
                echo '<tr?><td colspan="7"> Tidak ada data </td>
            </tr>';
            } else {
                $no = 1;
                while ($all_item = mysqli_fetch_assoc($all_items)) {
                    echo
                        '<tr>
                <td>' . $no . '</td>
                <td>
                    <div class="d-flex">
                        <img src="../img/' . $all_item['gambar'] . '.jpg" alt="" style="width: 100px;">
                        <div class="offset-1">
                            ' . $all_item['nama_produk'] . '
                            <br>
                            Size S/M/L/XL
                        </div>
                    </div>
                </td>
                <td>' . $all_item['harga'] . '</td>
                <td>' . $all_item['stock_produk'] . '</td>
                <td>' . $all_item['status'] . '</td>
                <td>
                    <a href="./editItemAdmin.php?id=' . $all_item['id'] . '" style="font-size: 40px;"><i
                            class="fas fa-edit"></i></a>
                    <a href="../deleteitemAdmin.php?id=' . $all_item['id'] . '" onClick="return confirm ( \'Yakin?\')"
                        style="font-size: 40px;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>';
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