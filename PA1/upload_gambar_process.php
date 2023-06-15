<?php
require_once 'config.php';
$id = $_POST['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['bukti_bayar'];
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
        $uploadPath = 'buktibayar/' . $newFileName;

        // Pindahkan file ke lokasi penyimpanan
        if (move_uploaded_file($fileTmp, $uploadPath)) {
            // Simpan nama file ke database
            $query = "UPDATE checkout_produk SET bukti_bayar = '$newFileName', status_bayar = 'Menunggu Konfirmasi' WHERE id_checkout = '$id'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Berhasil mengupload dan menyimpan ke database
                echo '<script>
                    alert("Gambar berhasil diunggah dan disimpan ke database");
                    window.location.href = "profile_user.php";
                </script>';
                exit;
            } else {
                echo '<script>
                    alert("Gagal menyimpan data gambar ke database");
                    window.location.href = "profile_user.php";
                </script>';
                exit;
            }
        } else {
            echo '<script>
                alert("Gagal mengunggah gambar");
                window.location.href = "profile_user.php";
            </script>';
            exit;
        }
    } else {
        echo '<script>
            alert("Terjadi kesalahan saat mengunggah gambar");
            window.location.href = "profile_user.php";
        </script>';
        exit;
    }
}
?>
