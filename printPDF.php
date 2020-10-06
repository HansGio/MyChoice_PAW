<?php
include 'db.php';
$all_item = mysqli_fetch_assoc($all_items);
$no = 1;

$html = '
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Report Data</title>
</head>

<body>
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
</table>
</body>

</html>
';

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <table border ="1" cellpadding="10" celspacing="0">
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
        
    
        <tr>
            <td>' . $no . '</td>
        <td>
        <div class="d-flex">
            <img src="../img/item/item' . $all_item['img_status'] == 0 ? 'default' : $all_item['id'] . '.jpg" alt=""
                style="width: 100px; ">
            <div class="offset-1">
                ' . $all_item['name'] . '
                <br>
                Size S/M/L/XL
            </div>
        </div>
    </td>
    <td>' . $all_item['price'] . '</td>
    <td>stock S = ' . $all_item['stock_s'] . ' <br>
        stock M = ' . $all_item['stock_m'] . ' <br>
        stock L = ' . $all_item['stock_l'] . ' <br>
    </td>
    <td>
        $hasil = (' . $all_item['stock_s'] . ' + ' . $all_item['stock_m'] . ' + ' . $all_item['stock_l'] . ');
        ' . $hasil . '
        ?> <br>
</td>
<td>' . $all_item['status'] . '</td>
</tr>

<?php
                        $no++;
                    }
                }
                ?>
<h1></h1>
</tbody>
</table>
</body>

</html>');
$mpdf->Output('report-data1.pdf', 'D');