<?php
include '../dashboard/dashboardAdmin.php';
include '../process/showConctactUsReport.php';
?>

<div class="title">
    <h2>Contact Us Report</h2>
</div>
</div>

<div class="body">
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (mysqli_num_rows($messages) == 0) {
                    echo '<tr><td colspan="7"> Tidak ada data </td>
                </tr>';
                } else {
                    $no = 1;
                    while ($message = mysqli_fetch_assoc($messages)) {
                ?>
                <tr>
                    <td> <?= $no ?></td>
                    <td>
                        <h5><?= $message['name'] ?></h5>
                    </td>
                    <td>
                        <h6> <?= $message['email'] ?> </h6>
                    </td>
                    <td>
                        <h6> <?= $message['phone_number'] ?> </h6>
                    </td>
                    <td>
                        <h6> <?= $message['message'] ?> </h6>
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
</div>