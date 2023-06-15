<?php
    require '../config.php';

    $id = $_GET['id'];
    $data = "UPDATE checkout_produk SET status_bayar = 'Terkonfirmasi' WHERE id_checkout = '$id'";

    if(mysqli_query($conn, $data)) {
        echo '<script>
            alert("Konfirmasi pembayaran produk berhasil");
            window.location.href = "konfirmasi_pembayaran.php";
        </script>';
    } else {
        echo '<script>
            alert("Konfirmasi pembayaran produk gagal: ' . mysqli_error($conn) . '");
            window.location.href = "konfirmasi_pembayaran.php";
        </script>';
    }
?>
