<?php 
    include "connection.php";

    $no_family=$_POST['no_family'];
    $stat=$_POST['stat'];
    $query = "SELECT * FROM family WHERE (no_family ='$no_family') and (stat ='$stat')";

    $result=mysqli_query($conn,$query);
    $buff=(mysqli_fetch_assoc($result));
?>
<div class="profilepict" >
        <?php include "displaypict.php" ?>
</div>
<table style="text-align: left">
    <br>
    <tr>
        <td style="width: 100px;">First Name</td>
        <td style="width: 200px"><?php echo $buff['firstname'] ?></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $buff['lastname'] ?></td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td><?php echo $buff['birthdate'] ?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $buff['gender'] ?></td>
    </tr>
</table>

<?php if(isset($_SESSION['level']) && $_SESSION['level']=="admin") {?>
<a class="btnsignup" href="?module=family&no_family=<?php echo $buff['no_family'];?>">Back</a>
<?php
} else{?>
    <a class="btnsignup" href="?module=family#pos">Back</a>
<?php  } ?>