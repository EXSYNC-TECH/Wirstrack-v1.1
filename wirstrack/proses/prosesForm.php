<?php 

include "koneksi.php";

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];

$masukkan = mysqli_query($conn, "INSERT INTO kurir SET nama='$nama', nomor='$nomor'");

header('Location: ../alamat.php');
exit;

?>