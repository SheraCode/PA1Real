<?php
session_start();
$id_user =$_SESSION["akun_id"];
require 'config.php';
$foto = $_FILES['file_gambar']['name'];
$file_tmp = $_FILES['file_gambar']['tmp_name'];
$ulasan_produk = $_POST['ulasan_produk'];
$username = $_POST['username'];
move_uploaded_file($file_tmp, 'foto/' .$foto);

// $query = "INSERT INTO feedback SET
//                     id_ulasan = '$id_user',
//                     urutan = '',
//                     review = '$ulasan_produk',
//                     akun_id = '$id_user',
//                     picture = '$foto',
//                     username = '$username',
//                     nama_produk = '' ";

$query = "INSERT INTO feedback (id_ulasan,urutan,review,akun_id,picture,username,id_produk) VALUES ('$id_user','','$ulasan_produk','$id_user','$foto','$username',2)";

mysqli_query($conn,$query)
or die("SQL Error " .mysqli_error());
header('location:shopdetail_cookies.php');

// $query_sql = "INSERT INTO ulasan (id_ulasan,username,gambar,review) VALUES ('','$username','$file_gambar','$ulasan_produk')";

// if(mysqli_query($conn, $query_sql)) {
//     header("Location: shopdetail_madumauas.php");
// } else {
//     echo "ulasan produk gagal : " . mysqll_error($conn);
// }

?>