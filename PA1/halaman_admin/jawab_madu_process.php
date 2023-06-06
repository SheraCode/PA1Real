<?php
require '../config.php';
$jawaban = $_POST['jawaban'];
$id = $_POST['id'];

$query_sql = "UPDATE pertanyaan SET jawaban='$jawaban' WHERE id_pertanyaan = '$id'";
if(mysqli_query($conn, $query_sql)) {
    header("Location: pertanyaan.php");
} else {
    echo "Pendaftaran akun gagal : " . mysqli_error($conn);
}

?>