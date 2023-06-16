<?php
require_once '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaproduk = $_POST['namaproduk'];
    $harga_produk = $_POST['harga'];

    // Mengambil informasi file gambar yang diupload
    $file = $_FILES['gambar'];
    $fileName = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Cek apakah ada file gambar yang diupload
    if ($fileError === UPLOAD_ERR_OK) {
        // Mendapatkan ekstensi file
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowedExtensions = array('jpeg', 'jpg', 'png');

        if (in_array(strtolower($fileExt), $allowedExtensions)) {
            // Menghasilkan nama unik untuk file
            $newFileName = uniqid() . '.' . $fileExt;
            // Lokasi penyimpanan file
            $uploadPath = '../asset/' . $newFileName;

            // Pindahkan file ke lokasi penyimpanan
            if (move_uploaded_file($fileTmp, $uploadPath)) {
                // Update data produk beserta gambar baru ke dalam database
                $sql = "UPDATE produk SET nama_produk = '$namaproduk', harga_produk = '$harga_produk', gambar = '$newFileName' WHERE id_produk = 3";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    // Berhasil mengupdate data produk
                    echo '<script>
                        alert("Produk berhasil diubah");
                        window.location.href = "edit_teman.php";
                    </script>';
                    exit;
                } else {
                    // Gagal mengupdate data produk
                    echo '<script>
                        alert("Gagal mengubah data produk: ' . mysqli_error($conn) . '");
                        window.location.href = "edit_teman.php";
                    </script>';
                    exit;
                }
            } else {
                // Gagal mengunggah gambar
                echo '<script>
                    alert("Gagal mengunggah gambar");
                    window.location.href = "edit_teman.php";
                </script>';
                exit;
            }
        } else {
            // File yang diunggah harus dalam format JPEG, JPG, atau PNG
            echo '<script>
                alert("File yang diunggah harus dalam format JPEG, JPG, atau PNG");
                window.location.href = "edit_teman.php";
            </script>';
            exit;
        }
    } else {
        // Terjadi kesalahan saat mengunggah gambar
        echo '<script>
            alert("Terjadi kesalahan saat mengunggah gambar");
            window.location.href = "edit_teman.php";
        </script>';
        exit;
    }
}
?>
