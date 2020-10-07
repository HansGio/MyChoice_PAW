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
    <h2>Laporan</h2>
</div>
</div>
<div class="body">
    <div class="big-menu">
        <h4 class="active-big-menu" style="margin-right: 600px;">Ringkasan Pembelian</h4>
        <a href="../printPDF.php"> <button type="submit" class="btn btn-success w-100" name="submit">PRINT
                PDF</button></a>
        <!-- <h4>Akrif</h4>
        <h4>NonAktif</h4> -->
        <!-- <div class="search-box">
            <input type="text" name="searchAllItemFromAdmin" id="search" placeholder="Search Items">
            <a href="" class="search-btn"><i class="fas fa-search"></i></a>
        </div> -->
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
                <th>Nomor Pesanan</th>
                <th>Kode Pesanan</th>
                <th>Informasi Produk</th>
                <th>Informasi Penerima</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items_order = mysqli_query($con, "SELECT ol.id, u.name, ol.address, ol.order_date, ol.delivery_status FROM order_list ol INNER JOIN users u ON ol.user_id = u.id WHERE ol.delivery_status = 'active' or ol.delivery_status = 'not-active' ") or die(mysqli_error($con));

            if (mysqli_num_rows($all_items_order) == 0) {
                echo '<tr?><td colspan="7"> Tidak ada data </td>
            </tr>';
            } else {
            $no = 1;
            while ($item_order = mysqli_fetch_assoc($all_items_order)) {
            $orderId = $item_order['id'];
            $all_items_order_detail = mysqli_query($con, "SELECT od.id, od.order_id, od.item_id, od.quantity, od.size,
            od.price, i.name FROM order_details od INNER JOIN items i ON od.item_id = i.id WHERE order_id = $orderId")
            or die(mysqli_error($con));
            ?>
            '<tr>
                <td><?= $no ?></td>
                <td><?= $item_order['id'] ?></td>
                <td>
                    <ol>
                        <?php
                                $total = 0;
                                while ($items_order_detail = mysqli_fetch_assoc($all_items_order_detail)) {
                                    $name = $items_order_detail['name'];
                                    $size = $items_order_detail['size'];
                                    $quantity = $items_order_detail['quantity'];
                                    $total += $items_order_detail['price'] * $quantity;

                                    echo '<li>' . $name . ', Size: ' . strtoupper($size) . ', Qty: ' . $quantity . '</li>';
                                }
                                ?>
                    </ol>
                </td>
                <td><?= $item_order['address'] ?></td>
                <td>
                    <h5>Rp. <?= number_format($total, 2, ",", ".") ?></h5>
                </td>
            </tr>';
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