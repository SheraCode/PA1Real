<?php

require_once 'config.php';
session_start();

$id_user = $_SESSION['akun_id'];
$sql = "SELECT * FROM chart INNER JOIN produk ON produk.id_produk = chart.id_produk WHERE id_user = $id_user";
$result = mysqli_query($conn, $sql);

$dataTabel = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $dataTabel[] = $row;
    }
}

// Mengonversi data tabel menjadi string yang dapat dikirim melalui POST
$dataString = serialize($dataTabel);
?>

<!-- Formulir untuk mengirimkan data melalui POST -->
<form method="POST" action="proses.php">
    <input type="hidden" name="data_tabel" value="<?php echo $dataString; ?>">
    <button type="submit">Kirim Data</button>
</form>
