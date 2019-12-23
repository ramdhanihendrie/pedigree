<?php 
    include "connection.php";

    if(isset($_GET['no_family'])){
        $no_family=$_GET['no_family'];
    }
    $query = "SELECT * FROM family WHERE (no_family ='$no_family') and (stat ='$stat')";

    $result=mysqli_query($conn,$query);
    $buff=(mysqli_fetch_assoc($result));

    $rowcount = mysqli_num_rows($result);

    if($rowcount==1){
?>

    <form action="?module=editfamily#pos" method="post">
        <input type="hidden" name="no_family" value="<?php echo $no_family?>">
        <input type="hidden" name="stat" value="<?php echo $stat?>">
        <input type="submit" value="Edit" class="btns">
        <input type="submit" formaction="?module=viewfamily#pos" value="View" class="btns">
    </form>

    <?php } 

    else{ ?>
    
    <form action="?module=addfamily#pos" method="post">
        <input type="hidden" name="no_family" value="<?php echo $no_family?>">
        <input type="hidden" name="stat" value="<?php echo $stat?>">
        <input type="submit" value="Add" class="btns">
        <input type="submit" formaction="?module=viewfamily#pos" value="View" class="btns">
    </form>

    <?php 
    }?>