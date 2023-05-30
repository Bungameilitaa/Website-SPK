<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db ="spk";
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(mysqli_connect_errno()){
        triger_error("koneksi gagal". mysqli_connect_errno());
    }
    

    
    
?>