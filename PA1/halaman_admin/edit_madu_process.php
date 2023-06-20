<?php
// Mengambil data yang dikirim melalui form
$namaproduk = $_POST['namaproduk'];
$beratProduk = $_POST['beratproduk'];
$harga_produk = $_POST['harga'];
$id_produk = $_POST['id_produk'];
$deskripsi = $_POST['deskripsi'];

// Mendapatkan informasi file gambar yang diupload
$gambar1 = "produk/" . $_FILES['gambar_1']['name'];
$gambar2 = "produk/" . $_FILES['gambar_2']['name'];
$gambar3 = "produk/" . $_FILES['gambar_3']['name'];

// Koneksi ke database
require_once '../config.php';


// Mengedit data produk dalam database
$query = "UPDATE produk SET nama_produk='$namaproduk', deskripsi_produk = '$deskripsi',berat_produk='$beratProduk', harga_produk='$harga_produk',gambar_1 = '$gambar1', gambar_2 = '$gambar2', gambar_3 = '$gambar3' WHERE id_produk='$id_produk'";
$result = mysqli_query($conn, $query);

// Proses upload gambar jika ada file yang diupload
if (!empty($gambar1)) {
  $targetDir = "produk/"; // Ganti dengan path ke folder produk yang sesuai
  $targetFile1 = $targetDir . basename($gambar1);
  move_uploaded_file($_FILES["gambar_1"]["tmp_name"], $targetFile1);
}

if (!empty($gambar2)) {
  $targetFile2 = $targetDir . basename($gambar2);
  move_uploaded_file($_FILES["gambar_2"]["tmp_name"], $targetFile2);
}

if (!empty($gambar3)) {
  $targetFile3 = $targetDir . basename($gambar3);
  move_uploaded_file($_FILES["gambar_3"]["tmp_name"], $targetFile3);
}

// Tutup koneksi database
mysqli_close($conn);

// Setelah proses pengeditan dan upload gambar selesai, arahkan pengguna ke halaman produk
header("Location: produk.php?status=success");
exit();
?>
