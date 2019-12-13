<?php
include "connection.php";

$mysql = "INSERT INTO user
(username, password, level) VALUES ('$_POST[username]', '$_POST[password]', 'new')";

if(!mysqli_query($conn, $mysql))
die ("<script>alert('Invalid, username already taken'); window.location.href='../index.php?module=signup#pos'; </script>");

echo "<script>alert('Congratulations,You have registered'); window.location.href='../index.php?module=signin#pos'; </script>";

mysqli_close($conn);
?>