<?php 

session_start();
include "connection.php";

$login = mysqli_query($conn, "SELECT * FROM user WHERE (username = '".$_POST['username']."') and (password = '".$_POST['password']."')");
$rowcount = mysqli_num_rows($login);
if ($rowcount==1) {
	$check = mysqli_fetch_assoc($login);

	if ($check['level']=="admin") {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo "<script>alert('Sign-In Success');</script>";
		header("location:adminpage.php");
	}
	elseif ($check['level']=="user") {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo "<script>alert('Sign-In Success');</script>";	
		header("location:userpage.php");
	}
	else {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		echo "<script>alert('Sign-In Failed, you not approved yet');window.location.href='?module=signin#pos';</script>";
	}
}
else{
	echo "<script>alert('Sign-In Failed');window.location.href='?module=signin#pos';</script>";	
}

 ?>