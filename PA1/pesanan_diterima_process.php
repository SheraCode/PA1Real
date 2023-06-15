<?php 
require 'config.php';
$id = $_GET['id'];
$data  = mysqli_query($conn,"UPDATE checkout_produk SET status_bayar = 'Pesanan Selesai' WHERE id_checkout = '$id'");
header("location:profile_user.php");

?>