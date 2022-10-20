<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "";

    $koneksi = mysqli_connect($host, $user, $pass, $db);
    if(!$koneksi){
        die("Tidak Terkoneksi Ke Database");
    }else{
        echo "Berhasil Terkoneksi"
    }
?>