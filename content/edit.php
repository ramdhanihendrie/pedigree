<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset =utf-8" />
	<title>Untitled Document</title>
</head>
<body>
<?php
$no_family=$_GET['no_family'];
include "connection.php";
$select="SELECT * FROM user WHERE no_family='$no_family'";
$result=mysqli_query($conn, $select);
while ($buff=mysqli_fetch_array($result)) {
?>
<h2>Edit Data</h2><br />
<form action="?module=editproc#pos" method="post">
<table width="487" border="0">
	<input type="hidden" name="no_family" value="<?php echo $buff['no_family'];?>" />
	<tr>
		<td width="150">username</td>
		<td width="327"><input type="text" name="username" value="<?php echo $buff['username'];?>" /></td>
	</tr>
	<tr>
		<td>password</td>
		<td><input type="text" name="password" value="<?php echo $buff['password'];?>" /></td>
	</tr>
	<tr>
		<td>level</td>
		<td>
			<select name="level" style="width: 163.5px;">
				<option value="new">New</option>
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select>
		</td>
	</tr>

	<tr>
		<td height="68" align="right"><input type="reset" value="reset" /></td>
		<td><input type="submit" value="submit" /></td>
	</tr>
</table>
</form>
<?php
};
mysqli_close($conn);
?>
</body>
</html>