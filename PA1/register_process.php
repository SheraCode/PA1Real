<?php
require 'config.php';
$username = $_POST['username_register'];
$password = $_POST['password_register'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat_email = $_POST['alamat_email'];
$alamat = $_POST['alamat'];
$fotoprofil = $_FILES['filefoto']['name'];
$file_tmp = $_FILES['filefoto']['tmp_name'];
move_uploaded_file($file_tmp, 'fotoprofil/' .$fotoprofil);

$query_sql = "INSERT INTO akun (username,password,nama_lengkap,alamat_email,alamat,foto) VALUES ('$username','$password','$nama_lengkap','$alamat_email','$alamat','$fotoprofil')";

if(mysqli_query($conn, $query_sql)) {
    header("Location: login.php");
} else {
    echo "Pendaftaran akun gagal : " . mysqli_error($conn);
}

?>