<?php 
include "connection.php";
$no_family=$_GET['no_family'];
$remove = mysqli_query($conn, "DELETE FROM user WHERE no_family ='$no_family';");
echo "<script>alert('data berhasil dihapus');window.location.href='adminpage.php?module=tabel#pos';</script>";