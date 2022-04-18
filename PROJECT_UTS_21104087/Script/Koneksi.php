<?php
    include_once("konfigurasi.php");
    $cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT)
        or die("Terjadi kesalahan ke database");
   

    echo "koneksi ke database sukses<br>";
