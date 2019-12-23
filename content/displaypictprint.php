<?php 
    include "connection.php";

    if(isset($_SESSION['no_family'])){
        $no_family=$_SESSION['no_family'];
    }
    $query = "SELECT * FROM family WHERE (no_family ='$no_family') and (stat ='$stat')";

    $result=mysqli_query($conn,$query);
    $buff=(mysqli_fetch_array($result));
?>

<img src="<?php echo "file/".$buff['photo']; ?> ">
<?php echo $buff['firstname'], " ", $buff['lastname']; ?>