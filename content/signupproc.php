<?php
include "connection.php";

$mysql = "INSERT INTO user
(username, password) VALUES ('$_POST[username]', '$_POST[password]')";

if(!mysqli_query($conn, $mysql))
die (mysqli_error($conn));

echo "<script>alert('Selamat, anda telah terdaftar'); window.location.href='../index.php?module=signin#pos'; </script>";

mysqli_close($conn);
?>