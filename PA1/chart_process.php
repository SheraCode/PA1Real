<!DOCTYPE html>
<html>
<head>
    <!-- Include SweetAlert CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
</head>
<body>
<?php
require_once 'config.php';
session_start();
$id_produk = $_POST['id_produk'];
$beratproduk = $_POST['berat'];
$harga = $_POST['harga'];
$quantity = $_POST['quantity'];
$berat = $quantity * $beratproduk;
$total_harga = $quantity * $harga;
$id_user = $_SESSION["akun_id"];

$chart_admin = "INSERT INTO chart_data (id_chartdata, kuantitas, total_harga, id_user, id_produk, berat) VALUES ('', '$quantity', '$total_harga','$id_user','$id_produk','$berat')";
$query_sql = "INSERT INTO chart (id_chart, kuantitas, total_harga, id_user, id_produk, berat) VALUES ('', '$quantity', '$total_harga','$id_user','$id_produk','$berat')";
if (mysqli_query($conn, $chart_admin) && mysqli_query($conn, $query_sql)) {
    echo "<script>
            Swal.fire({
                title: 'Tambah Keranjang Berhasil',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then(function() {
                window.location.href = 'chart.php';
            });
        </script>";
} else {
    echo "<script>
            Swal.fire({
                title: 'Tambah Keranjang Gagal',
                text: '" . mysqli_error($conn) . "',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
        </script>";
}
?>
