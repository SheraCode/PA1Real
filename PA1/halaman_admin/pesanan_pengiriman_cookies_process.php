<?php 
require '../config.php';
$id = $_POST['id'];
$data  = mysqli_query($conn,"UPDATE checkout_produk SET status_bayar = 'Pesanan ' WHERE id_checkout = '$id'");
header("location:pesanan_kirim_cookies.php");

?>