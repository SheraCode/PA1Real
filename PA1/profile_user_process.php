<?php
session_start();
require 'config.php';
$nama_lengkap = $_POST['nama_lengkap'];
$alamat_email = $_POST['alamat_email'];
$alamat = $_POST['alamat'];
$fotoprofil = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp, 'fotoprofil/' .$fotoprofil);
$id_user =$_SESSION["akun_id"];
var_dump($fotoprofil);
$query_sql = "UPDATE akun SET nama_lengkap='$nama_lengkap',alamat_email='$alamat_email',alamat='$alamat', foto='$fotoprofil' WHERE id_akun='$id_user'";
if(mysqli_query($conn, $query_sql)) {
    header("Location: profile_user.php");
} else {
    echo "Update profile gagal : " .mysqli_error($conn);
}

?>