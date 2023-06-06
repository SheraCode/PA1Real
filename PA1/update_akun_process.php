<?php
session_start();
require 'config.php';
$username = $_POST['usernamebaru'];
$password = $_POST['passwordbaru'];
$username123 = $_SESSION['username'];

$query_sql = "UPDATE akun SET username='$username',password='$password' WHERE id_akun='$id_user'";
$query_sql2 = "UPDATE checkout SET username='$username' WHERE LIKE '%$username123%'";

if(mysqli_query($conn, $query_sql,$query_sql2)) {
    session_start();
    $username = $_SESSION['username'];
    header("Location: profile_user.php");
} else {
    echo "Pendaftaran akun gagal : " . mysqli_error($conn);
}

?>