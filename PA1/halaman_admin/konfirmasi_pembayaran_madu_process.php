<?php

    require '../config.php';

    $id = $_POST['id'];
    $email = $_POST['email'];
    $data = "UPDATE checkout_produk SET status_bayar = 'Terkonfirmasi' WHERE id_checkout = '$id'";

    if(mysqli_query($conn, $data)) {
        header("Location: konfirmasi_madu.php");
    } else {
        echo "konfirmasi pembayaran produk gagal : " . mysqli_error($conn);
    }
?>