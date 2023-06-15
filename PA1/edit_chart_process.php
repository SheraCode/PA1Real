<?php
require_once 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Include SweetAlert CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css" />
</head>
<body>
    <?php
function updateKuantitasBeratHargaKeranjang($id_chart, $kuantitas)
{
    global $conn;

    $query = "SELECT * FROM chart WHERE id_chart = '$id_chart'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $item = $row['id_produk'];
        $berat = 0;
        $harga_per_item = 0;
        $cookies = $_POST['harga'];
        $madu = $_POST['harga'];
        $sambal = $_POST['harga'];

        // Menghitung berat dan total harga berdasarkan item yang diupdate
        if ($item == 1) {
            $berat = $kuantitas * 400;
            $harga_per_item = $madu;
        } elseif ($item == 2) {
            $berat = $kuantitas * 100;
            $harga_per_item = $cookies;
        } elseif ($item == 3) {
            $berat = $kuantitas * 250;
            $harga_per_item = $sambal;
        }

        $total_harga = $kuantitas * $harga_per_item;

        // Update kuantitas, berat, dan total harga pada keranjang
        $updateQuerydata = "UPDATE chart_data SET kuantitas = '$kuantitas', berat = '$berat', total_harga = '$total_harga' WHERE id_chartdata = '$id_chart'";

        $updateQuery = "UPDATE chart SET kuantitas = '$kuantitas', berat = '$berat', total_harga = '$total_harga' WHERE id_chart = '$id_chart'";
        $updateResult = mysqli_query($conn, $updateQuery);
        $updateResultData = mysqli_query($conn, $updateQuerydata);
        
        if ($updateResult && $updateResultData) {
            return true;
        } else {
            return false;
        }

        
    }

    return false;
}

session_start();

// Cek jika pengguna tidak terautentikasi, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("location:user.php");
    exit;
}

$id_user = $_SESSION["akun_id"];

// Cek jika ada permintaan untuk mengupdate kuantitas
if (isset($_POST['update'])) {
    $id_chart = $_POST['id_chart'];
    $kuantitas = $_POST['kuantitas'];

    // Panggil fungsi updateKuantitasBeratKeranjang untuk mengupdate kuantitas dan berat
    $updateResult = updateKuantitasBeratHargaKeranjang($id_chart, $kuantitas);
    

    if ($updateResult) {
        // Menampilkan SweetAlert setelah berhasil mengupdate kuantitas
        echo '<script>
                Swal.fire({
                    title: "Sukses",
                    text: "Kuantitas berhasil diperbarui",
                    icon: "success",
                    confirmButtonText: "Ok"
                }).then(function() {
                    // Redirect ke halaman chart.php setelah menutup SweetAlert
                    window.location.href = "chart.php";
                });
              </script>';
        exit;
    } else {
        echo "Gagal mengupdate kuantitas dan berat keranjang.";
    }
}
?>
