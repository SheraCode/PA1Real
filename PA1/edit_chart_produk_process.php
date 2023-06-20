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

$id_chart = $_POST['id_chart'];
$kuantitas = $_POST['kuantitas'];
$harga_produk = $_POST['harga'];
$berat = $_POST['berat'];

// Menghitung total harga
$total_harga = $kuantitas * $harga_produk;
$berattotal = $kuantitas * $berat;

// Update data di tabel chart
$updateChartQuery = "UPDATE chart SET kuantitas = $kuantitas, total_harga = $total_harga, berat= $berattotal WHERE id_chart = $id_chart";
mysqli_query($conn, $updateChartQuery);

// Menampilkan pesan SweetAlert setelah pembaruan berhasil
echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18"></script>';
echo '<script>
    Swal.fire({
        icon: "success",
        title: "Keranjang berhasil diperbarui",
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = "chart.php";
    });
</script>';
?>
