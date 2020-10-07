<?php
include 'db.php';
$no = 1;


$html = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>
    <img src="img/logo/logo.png" alt="" style="float: right; width:200px">
    <h1> Report Data <br> My Choice! </h1>
    </div>
    <table border ="1" cellpadding="10" celspacing="0">
            <tr>
                <th>Nomor Pesanan</th>
                <th>Kode Pesanan</th>
                <th>Informasi Produk</th>
                <th>Informasi Penerima</th>
                <th>Total Harga</th>
            </tr>';

$all_items_order = mysqli_query($con, "SELECT ol.id, u.name, ol.address, ol.order_date, ol.delivery_status FROM order_list ol INNER JOIN users u ON ol.user_id = u.id WHERE ol.delivery_status = 'notset'") or die(mysqli_error($con));

foreach ($all_items_order as $item_order) {
    $html .= '<tr>
        <td>' . $no . '</td>
        <td>' . $item_order['id'] . '</td>
        
        <td>
            <ol>';

    $total = 0;
    foreach ($all_items_order_detail as $items_order_detail) {
        $orderId = $item_order['id'];
        $all_items_order_detail = mysqli_query($con, "SELECT od.id, od.order_id, od.item_id, od.quantity, od.size, od.price, i.name FROM order_details od INNER JOIN items i ON od.item_id = i.id WHERE order_id = $orderId") or die(mysqli_error($con));

        // TIDAK BISA DARI JOINAN !!
        $name = $items_order_detail['name'];
        $size = $items_order_detail['size'];
        $quantity = $items_order_detail['quantity'];
        $total += $items_order_detail['price'] * $quantity;

        $html .= '<p>' . $name . '  
        , Size : ' . $size  . '
        , Qty : ' .  $quantity . '
        </p>
        ';
    }

    $html .= '</ol>
        </td>
            <td>' . $item_order['address'] . '</td>
            <td>
                <h5>Rp. ' . $total . '</h5>
            </td>
        </tr>';
    $no++;
}

$html .= '
</table>


</body>

</html>';

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('report-data1.pdf', 'D');