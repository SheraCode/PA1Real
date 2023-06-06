<?php 
require '../config.php';
$id = $_POST['id'];
$data  = mysqli_query($conn,"UPDATE checkout_produk SET status_bayar = 'Pesanan Selesai' WHERE id_checkout = '$id'");
header("location:pesanan_selesai.php");

?>