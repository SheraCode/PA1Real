<?php
// proses.php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['data_tabel'])) {
        $dataString = $_POST['data_tabel'];
        $dataTabel = json_decode($dataString, true);

        if ($dataTabel === null) {
            echo "Data tidak valid.";
            exit;
        }

        // Simpan data tabel ke database
        foreach ($dataTabel as $data) {
            $nama_produk = $data['nama_produk'];
            $kuantitas = $data['kuantitas'];
            $total_harga = $data['total_harga'];

            // Lakukan pengecekan dan sanitasi data sebelum menyimpan ke database

            // Lakukan query untuk menyimpan data ke tabel
            $query = "INSERT INTO tabel_tujuan (nama_produk, kuantitas, total_harga) VALUES ('$nama_produk', '$kuantitas', '$total_harga')";
            mysqli_query($conn, $query);
        }

        // Tambahkan pesan sukses atau tindakan lain setelah berhasil menyimpan ke database
        echo "Data berhasil disimpan ke database.";
    }
}
?>
