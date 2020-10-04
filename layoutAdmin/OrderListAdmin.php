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
    <h2>Daftar Pesanan</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4 class="active-big-menu" style="margin-right: 800px;"> Semua Pesanan</h4>
        <!-- <h4>Akrif</h4>
        <h4>NonAktif</h4>-->
        <div class="search-box">
            <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search Items">
            <a href="" class="search-btn"><i class="fas fa-search"></i></a>
        </div>

        <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div> -->

        <!-- </div> <div class="search"> -->
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nomer Pesanan</th>
                <th>Kode Pesanan</th>
                <th>Informasi Produk</th>
                <th>Informasi Penerima</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items_order = mysqli_query($con, "SELECT * FROM order_list") or die(mysqli_error($con));

            if (mysqli_num_rows($all_items_order) == 0) {
                echo '<tr?><td colspan="7"> Tidak ada data </td>
            </tr>';
            } else {
            $no = 1;
            while ($all_item_order = mysqli_fetch_assoc($all_items_order)) {
            echo
            '<tr>
                <td>' . $no . '</td>
                <td>' . $all_item_order['id'] . '</td>
                <td>' . $all_item_order['informasi_produk'] . '</td>
                <td>' . $all_item_order['harga'] . '</td>
                <td>' . $all_item_order['stock'] . '</td>
                <td>' . $all_item_order['status'] . '</td>
                <td>
                    <a href="./editItemAdmin.php?id=' . $all_item_order['id'] . '">Kirim</a>
                    <a href="../deleteitemAdmin.php?id=' . $all_item_order['id'] . '">Batal</a>
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