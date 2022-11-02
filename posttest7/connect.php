<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_artsyde";

    $connection = mysqli_connect($host, $user, $pass, $db);
    if(!$conection){
        die("Tidak Terkoneksi Ke Database");
    }else{
        echo "Berhasil Terkoneksi"
    }
?>