<?php
// Koneksi ke database
require_once '../config.php';

// Ambil nilai dari formulir
$nama_produk = $_POST['nama_produk'];
$berat_produk = $_POST['berat_produk'];
$harga_produk = $_POST['harga_produk'];
$deskripsi_produk = $_POST['deskripsi_produk'];

// Proses file gambar
$gambar_1 = $_FILES['gambar_1']['name'];
$gambar_2 = $_FILES['gambar_2']['name'];
$gambar_3 = $_FILES['gambar_3']['name'];

$gambar_1_tmp = $_FILES['gambar_1']['tmp_name'];
$gambar_2_tmp = $_FILES['gambar_2']['tmp_name'];
$gambar_3_tmp = $_FILES['gambar_3']['tmp_name'];

// Direktori untuk menyimpan file gambar
$target_dir = "produk/";

// Validasi tipe file
$allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');

$gambar_1_ext = strtolower(pathinfo($gambar_1, PATHINFO_EXTENSION));
$gambar_2_ext = strtolower(pathinfo($gambar_2, PATHINFO_EXTENSION));
$gambar_3_ext = strtolower(pathinfo($gambar_3, PATHINFO_EXTENSION));

if (!in_array($gambar_1_ext, $allowed_extensions) || !in_array($gambar_2_ext, $allowed_extensions) || !in_array($gambar_3_ext, $allowed_extensions)) {
    echo "File yang diunggah harus berupa gambar (JPG, JPEG, PNG, GIF).";
    exit();
}

// Pindahkan file gambar ke direktori tujuan
$gambar_1_path = $target_dir . $gambar_1;
$gambar_2_path = $target_dir . $gambar_2;
$gambar_3_path = $target_dir . $gambar_3;

move_uploaded_file($gambar_1_tmp, $gambar_1_path);
move_uploaded_file($gambar_2_tmp, $gambar_2_path);
move_uploaded_file($gambar_3_tmp, $gambar_3_path);

// Tambahkan produk ke database
$query = "INSERT INTO produk (nama_produk, berat_produk, harga_produk, deskripsi_produk, gambar_1, gambar_2, gambar_3) VALUES ('$nama_produk', $berat_produk, $harga_produk, '$deskripsi_produk', '$gambar_1_path', '$gambar_2_path', '$gambar_3_path')";
$result = mysqli_query($conn, $query);

// Periksa hasil penambahan produk
if ($result) {
    echo "<script>alert('Produk berhasil ditambahkan.'); window.location.href = 'produk.php';</script>";
    exit;
} else {
    echo "Terjadi kesalahan saat menambahkan produk: " . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
