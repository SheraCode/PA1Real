<?php 
session_start();
$ongkos = isset($_POST['ongkir']) ? $_POST['ongkir'] : 0;
$ongkos = str_replace(',', '', $ongkos); // Menghapus koma
$total_pembayaran = isset($_POST['total_pembayaran']) ? $_POST['total_pembayaran'] : 0;
$hasil = $ongkos + $total_pembayaran;
$tanggal = date('d F Y');
$id_user = $_SESSION["akun_id"];

require_once 'config.php';

// Simpan gambar ke folder "lampiran_keranjang"
$file = $_FILES['lampiran_keranjang'];
$fileName = $file['name'];
$fileTmp = $file['tmp_name'];
$fileSize = $file['size'];
$fileError = $file['error'];

// Cek apakah ada file yang diupload
if ($fileError === UPLOAD_ERR_OK) {
    // Mendapatkan ekstensi file
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    // Menghasilkan nama unik untuk file
    $newFileName = uniqid() . '.' . $fileExt;
    // Lokasi penyimpanan file
    $uploadPath = 'lampiran_keranjang/' . $newFileName;

    // Pindahkan file ke lokasi penyimpanan
    if (move_uploaded_file($fileTmp, $uploadPath)) {
        $hapusChartData = "UPDATE chart_data SET status = 'include ongkir' WHERE id_chartdata IN (SELECT id_chartdata FROM chart WHERE id_user = '$id_user')";
        $hapusChart = "DELETE FROM chart WHERE id_user = '$id_user'";
        $query_sql = "INSERT INTO checkout_produk (id_checkout,total_pembayaran,tanggal_pemesanan, status_bayar, bukti_bayar, akun_id,lampiran_keranjang) VALUES ('','$hasil','$tanggal','Bayar Sekarang','', '$id_user','$newFileName')";

        if (mysqli_query($conn, $hapusChartData) && mysqli_query($conn, $hapusChart) && mysqli_query($conn, $query_sql)) {
            echo "<script>alert('Checkout Produk Berhasil Silahkan Melakukan Pembayaran.'); window.location.href = 'profile_user.php';</script>";
        } else {
            echo "<script>alert('Pembelian produk gagal: " . mysqli_error($conn) . "');</script>";
        }
    } else {
        echo "<script>alert('Gagal mengunggah gambar lampiran keranjang');</script>";
    }
} else {
    echo "<script>alert('Terjadi kesalahan saat mengunggah gambar lampiran keranjang');</script>";
}
?>
