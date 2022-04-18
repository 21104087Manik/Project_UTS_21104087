<?php
    include_once("koneksi.php");
    $sql = "CREATE DATABASE canangbusari;";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "database sukses";
    }
    else{
        echo "Terjadi kesalahan pembuatan database";
    }
    mysqli_close($cnn);