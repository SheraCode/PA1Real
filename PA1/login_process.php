
<?php

    require "config.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query_sql = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn,$query_sql);

    if(mysqli_num_rows($result) > 0) {
        $row_akun = mysqli_fetch_array($result);
        session_start();
        $_SESSION["akun_id"] = $row_akun["id_akun"];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: user_login.php");
    } else {
        header("Location: login.php");
    }
?>