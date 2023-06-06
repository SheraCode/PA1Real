<?php
session_start();
require 'config.php';
$username = $_POST['username'];
$quantity = $_POST['quantity'];
$alamat = $_POST['alamat'];
$tanggal = date('d F Y');
$id_user =$_SESSION["akun_id"];

$query_sql = "INSERT INTO checkout_produk (id_checkout,username,quantity,alamat,tanggal_pemesanan,nama_produk,status_bayar,bukti_bayar,akun_id) VALUES ('','$username','$quantity','$alamat','$tanggal','1','Bayar Sekarang','','$id_user')";
if(mysqli_query($conn, $query_sql)) {
    header("Location: profile_user.php");
} else {
    echo "Pembelian produk gagal : " . mysqli_error($conn);
}

if($query_sql) { ?>
    <script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
    });
    </script>
<?php } ?>

