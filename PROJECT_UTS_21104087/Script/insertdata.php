<?php
     include_once("Koneksi.php");
     $nama = "Buk Arik";
     $jenis_canang = "Cemper";
     $alamat = "SIDAKARYA";
     $harga = "25.000";
     

     $sql = "INSERT INTO canang(NAMA, JENIS_CANANG, ALAMAT, HARGA) Values('$nama','$jenis_canang','$alamat','$harga')";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data sukses<br>";
     }else{
        echo "Insert Data gagal<br>";
     }