<?php
session_start();

// Check if the cart exists, if not, initialize it
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Get the product details from the request
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$jumlah = $_POST['jumlah'];

// Create a unique key for the cart item
$key = md5($nama_produk . $harga_produk);

// Add the product to the cart
$_SESSION['cart'][$key] = array(
    'nama_produk' => $nama_produk,
    'harga_produk' => $harga_produk,
    'jumlah' => $jumlah
);

// Redirect back to the product page
header('Location: produk.php');
exit;
?>
