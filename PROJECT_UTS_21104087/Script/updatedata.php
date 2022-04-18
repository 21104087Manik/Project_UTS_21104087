<?php

include_once("Koneksi.php");

$sql = "UPDATE canang SET NAMA='Pak Komang' WHERE JENIS_CANANG='Cemper';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pengubahan data suskes<br>";
}else{
    echo "Pengubahan Gagal<br>";
}
mysqli_close($cnn);