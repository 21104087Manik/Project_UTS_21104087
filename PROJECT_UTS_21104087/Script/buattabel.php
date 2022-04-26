<?php
    include_once("koneksi.php");
    $sql = "CREATE TABLE canang(
        NAMA Varchar(50) PRIMARY KEY, 
        JENIS_CANANG Varchar(20), 
        HARGA FLOAT(10), 
        ALAMAT Varchar(20)
    );";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "pembuatan tabel berhasil";
    } else{
        echo "pembuatan tabel gagal";
    }
