<?php
require '../config.php';
$username = $_POST['username_register'];
$password = $_POST['password_register'];



$query_sql = "INSERT INTO akun_admin (id,username,password) VALUES ('','$username','$password')";
    
if(mysqli_query($conn, $query_sql)) {
    header("Location: admin.php");
} else {
    echo "Pendaftaran akun gagal : " . mysqli_error($conn);
}

?>