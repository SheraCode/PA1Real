<?php
session_start();
require 'config.php';
$id = $_POST['id_produk'];
$bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
$file_tmp = $_FILES['bukti_pembayaran']['tmp_name'];
move_uploaded_file($file_tmp, 'buktibayar/' .$bukti_pembayaran);

$query_sql = "UPDATE checkout_produk SET status_bayar = 'Menunggu Konfirmasi', bukti_bayar = '$bukti_pembayaran' WHERE id_checkout='$id';
";
if (mysqli_query($conn, $query_sql)) {
    echo "<script>alert('Bukti Bayar Berhasil Disimpan.');</script>";
    echo "<script>window.location.href = 'keranjang.php';</script>";

} else {
    echo "<script>alert('Pembayaran gagal: " . mysqli_error($conn) . "');</script>";
    echo "<script>window.location.href = 'keranjang.php';</script>";
}

?>