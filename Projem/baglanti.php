<?php

$vt_sunucu="localhost";
$vt_kullanıcı="root";
$vt_sifre="";
$vt_adi="kuruogluticaret";


$baglan=mysqli_connect($vt_sunucu,$vt_kullanıcı,$vt_sifre,$vt_adi);
    
    if(!$baglan){
        
          die("Veritabanı Bağlantı İşlemi Başarısız".mysqli_connect_error());

    }
   // else{
      //  echo "Bağlantı Başarılı";
   // }
?>