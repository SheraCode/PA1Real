<?php
session_start();
$id_user =$_SESSION["akun_id"];
require 'config.php';
$pertanyaan = $_POST['pertanyaan'];
$produk = $_POST['produk'];

$query = "INSERT INTO pertanyaan (id_pertanyaan,pertanyaan,id_produk,id_user,jawaban) VALUES ('','$pertanyaan','$produk','$id_user','')";

mysqli_query($conn, $query) or die("SQL Error " . mysqli_error());
echo "<script>alert('Pertanyaan berhasil disimpan.');</script>";
echo "<script>window.location.href = 'keranjang.php';</script>";

?>