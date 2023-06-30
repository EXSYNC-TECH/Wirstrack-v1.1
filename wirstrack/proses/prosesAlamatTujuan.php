<?php 

include "koneksi.php";

$alamat_tujuan1 = $_POST['alamat_tujuan1'];

$masukkan = mysqli_query($conn, "UPDATE kurir SET alamat_tujuan1='$alamat_tujuan1' ORDER BY id DESC LIMIT 1");

header('Location: ../rute.php');
exit;

?>