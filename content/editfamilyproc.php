<?php 
    include "connection.php";

    $name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/'.$name);

    $query = "UPDATE family SET firstname='$_POST[firstname]',
    lastname='$_POST[lastname]', birthdate='$_POST[birthdate]', gender='$_POST[gender]', photo='$name'
    WHERE (no_family='$_POST[no_family]') and (stat='$_POST[stat]') ";

    if(!mysqli_query($conn, $query))
    die (mysqli_error($conn));

    echo"<script>alert('Edited');
    window.location.href='?module=family#pos';
    </script>";
    
?>