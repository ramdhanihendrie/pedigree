<?php 
include "connection.php";
$no_family=$_SESSION['no_family'];

$query="SELECT * FROM family WHERE no_family='$no_family'";

$result=mysqli_query($conn,$query);
$buff=mysqli_fetch_array($result);
?>
<h2>Edit Data</h2><br />
<form action="?module=editfamilyproc#pos" method="post">
    <table width="487" border="0">
        <tr>
            <td width="150">First Name</td>
            <td width="327"><input type="text" name="firstname" value="<?php echo $buff['firstname'];?>" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname" value="<?php echo $buff['lastname'];?>" /></td>
        

        <tr>
            <td height="68" align="right"><input type="reset" value="reset" /></td>
            <td><input type="submit" value="submit" /></td>
        </tr>
    </table>
</form>