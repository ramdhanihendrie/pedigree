<?php
	
	if(isset($_GET['username'])){
		
	include"connection.php";
	$username=$_GET['username'];
	$select="SELECT * FROM user WHERE username like '%$username%'";
	$result=mysqli_query($conn, $select);
	
	if($username==null)
		echo "Username tidak ditemukan";
	else
	include"content/search.php";}
?>
<br>

<a class="btnback" href="adminpage.php"><<<-Back to list</a>