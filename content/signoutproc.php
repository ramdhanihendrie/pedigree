<?php 
unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Anda Berhasil Keluar');window.location.href='index.php';</script>";	
mysqli_close($conn);
 ?>