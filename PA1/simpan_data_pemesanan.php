<?php
require_once 'config.php';

  $id_produk = $_GET['id_produk'];
  $kuantitas = $_GET['kuantitas'];
  $total_harga = $_GET['total_harga'];

  // Lakukan proses penyimpanan data ke tabel data_pemesanan di sini
  $insertQuery = "INSERT INTO data_pemesanan (id_data, id_produk, kuantitas, total_harga) VALUES ('','$id_produk', '$kuantitas', '$total_harga')";
  if(mysqli_query($conn, $insertQuery)) {
    echo "Data pemesanan berhasil disimpan.";
  } else {
    echo "Gagal menyimpan data pemesanan: " . mysqli_error($conn);
  }
?>
