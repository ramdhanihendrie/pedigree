<?php 
    include "connection.php";

    $name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/'.$name);

    $query = "INSERT INTO family (stat, no_family, firstname, lastname, birthdate, gender, photo) VALUES 
    ('$_POST[stat]', '$_POST[no_family]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[birthdate]', '$_POST[gender]', '$name')";

    if(!mysqli_query($conn, $query))
    die (mysqli_error($conn));

    echo"<script>alert('Selamat, anda telah terdaftar');
    window.location.href='?module=family#pos';
    </script>";
    ?>