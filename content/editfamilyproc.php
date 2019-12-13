<?php
include"connection.php";
if(isset($_GET['no_family'])){
	$query="UPDATE family SET firstname='$_POST[firstname]', lastname='$_POST[lastname]',
	birthdate='$_POST[birtdate]'
	WHERE no_family='$_POST[no_family]'";
}
else{
    $query="INSERT INTO family (firstname, lastname, birthdate, gender,photo) VALUES ('$_POST[firstname]', '$_POST[lastname]')";
}
    
    $result=mysqli_query($conn, $query);
	if($result){
		echo"<script>alert('Data Updated');window.location.href='userpage.php?module=family#pos';</script>";
	}
?>