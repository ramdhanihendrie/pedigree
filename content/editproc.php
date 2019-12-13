<?php
include"connection.php";
if(isset($_POST['no_family'])){
	$edit="UPDATE user SET username='$_POST[username]', password='$_POST[password]',
	level='$_POST[level]', no_family='$_POST[no_family]'
	WHERE no_family='$_POST[no_family]'";
	$result=mysqli_query($conn, $edit);
	if($result){
		echo"<script>alert('Data Updated');window.location.href='adminpage.php?module=tabel#pos';</script>";
	}
}
?>