<?php
include '../dashboard/dashboardAdmin.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $orderId = $_GET['id'];
    $update = mysqli_query($con, "UPDATE order_list SET delivery_status='$action' WHERE id = $orderId") or die(mysqli_error($con));
}
?>

<div class="title">
    <h2>Daftar Pesanan</h2>
</div>
</div>
<div class="container">

</div>
<div class="body">
    <div class="big-menu">
        <h4 class="active-big-menu" style="margin-right: 800px;"> Semua Pesanan</h4>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Kode Pesanan</th>
                <th>Tanggal Pemesanan</th>
                <th>Informasi Produk</th>
                <th>Informasi Penerima</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $all_items_order = mysqli_query($con, "SELECT ol.id, u.name, ol.address, ol.order_date, ol.delivery_status FROM order_list ol INNER JOIN users u ON ol.user_id = u.id WHERE ol.delivery_status = 'notset'") or die(mysqli_error($con));

            if (mysqli_num_rows($all_items_order) == 0) {
                echo '<tr?><td colspan="7"> Tidak ada data </td></tr>';
            } else {
                while ($item_order = mysqli_fetch_assoc($all_items_order)) {
                    $orderId = $item_order['id'];
                    $all_items_order_detail = mysqli_query($con, "SELECT od.id, od.order_id, od.item_id, od.quantity, od.size, od.price, i.name FROM order_details od INNER JOIN items i ON od.item_id = i.id WHERE order_id = $orderId") or die(mysqli_error($con));
            ?>
                    <tr>
                        <td><?= $item_order['id'] ?></td>
                        <td><?= $item_order['order_date'] ?></td>
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
                        <td><?= '<strong>' . $item_order['name'] . '</strong><br>' . $item_order['address'] ?></td>
                        <td>
                            <h5>Rp. <?= number_format($total, 2, ",", ".") ?></h5>
                        </td>
                        <td>
                            <a class="btn btn-success" href="OrderListAdmin.php?action=sent&id=<?= $orderId ?>">Kirim</a>
                            <a class="btn btn-danger" href="OrderListAdmin.php?action=canceled&id=<?= $orderId ?>">Batal</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>