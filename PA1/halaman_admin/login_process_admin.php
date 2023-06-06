<!--
Nama : Johannes Bastian Jasa Sipayung
NIM : 013
Kelas : 41TRPL1
-->
<?php

    require "../config.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query_sql = "SELECT * FROM akun_admin WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn,$query_sql);

    if(mysqli_num_rows($result) > 0) {
        $row_akun = mysqli_fetch_array($result);
        session_start();
        $_SESSION["akun_id"] = $row_akun["id_akun"];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:admin.php");
    } else {
        header("Location: ../login_admin.php");
    }
?>