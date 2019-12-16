<?php 
    include "connection.php";

    $query = "SELECT * FROM family WHERE (no_family='$_SESSION[no_family]' and stat='$_POST[stat]')";
    $buff=(mysqli_fetch_assoc(mysqli_query($conn,$query)));
?>
<form action="?module=editfamilyproc#pos" method="post" enctype="multipart/form-data">
    <input type="hidden" name="stat" value="<?php echo $_POST['stat'] ?>">
    <input type="hidden" name="no_family" value="<?php echo $_SESSION['no_family']?>">

    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" value="<?php echo $buff['firstname']?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
        <td><input type="text" name="lastname" value="<?php echo $buff['lastname']?>"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="birthdate" value="<?php echo $buff['birthdate']?>"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <?php if($buff['gender']=="male") { ?>
            <td><input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female</td>
            <?php }
            else{ ?>
            <td><input type="radio" name="gender" value="male" >Male
            <input type="radio" name="gender" value="female" checked>Female</td>
            <?php } ?>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="file" value="><?php echo $buff['photo'] ?>"style="margin-left: 90px;"></td>
        </tr>
    </table>
    <input type="submit" value="SAVE">
</form>