<?php
if (isset($_GET['id'])) {
    include_once '../db.php';

    $id = $_GET['id'];
    $queryDelete = mysqli_query($con, "DELETE FROM items WHERE id='$id'") or die(mysqli_error($con));
    if ($queryDelete) {
        echo
            '<script>
                    alert("Delete Success"); window.history.back()
                </script>';
    } else {
        echo
            '<script>
                    alert("Delete Failed"); window.history.back()
                </script>';
    }
} else {
    echo
        '<script>
        alert("Item ID not found");
                window.history.back()
            </script>';
}