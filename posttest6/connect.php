<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "catalogue";

    $connection = mysqli_connect($host, $user, $pass, $db);
    if(!$conection){
        die("Tidak Terkoneksi Ke Database");
    }else{
        echo "Berhasil Terkoneksi"
    }
?>