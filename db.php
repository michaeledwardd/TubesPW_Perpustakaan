<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "tubes_perpustakaan";

    
    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>