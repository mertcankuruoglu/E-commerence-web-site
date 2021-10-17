<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
a{
 
  background-color: #4CAF50;
  letter-spacing: 1px;
  font-size: 18px;
  padding: 10px 30px;
  color: white;
  border: 2px solid white;
  border-radius: 10px;
  float: right;
  text-decoration: none;
}
a:hover{
  opacity: 60%;
  transition: 1s;
}
#silme{
  background-color: red;
  letter-spacing: 1px;
  font-size: 18px;
  padding: 10px 30px;
  color: white;
  border: 2px solid white;
  border-radius: 10px;
  float: right;
  text-decoration: none;
}
</style>
</head>
<body>

<table id="customers">   <!--php tablomun içerisinde olması gerekiyor o yüzde buraya yazdık.-->
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon </th>
    <th>Mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>
  <?php

        session_start();  // veri yoksa bu sayfaya giremeyelim veri varsa girebilelim.
        if($_SESSION["user"]==""){ // yani boşsa giremeyelim
            echo "<script>window.location.href='cikis.php'</script>";  // bizi sokmasın direk çıkış yapsın.
        } 
        else{ // kullanıcı doğru bir şekilde giriyorsa
            
          echo "Kullanıcı Adınız: ".$_SESSION["user"]."<br>";
          echo  "<a href='cikis.php'>Çıkış Yap</a><br><br>";
          
          include("baglanti.php"); // bağlantımızı ekledik her sayfa için bağlantı yazmaya gerek kalmadı.

          $sec="Select * From iletisim"; // iletişim tablosundan herşeyi seç.
          $sonuc=$baglan->query($sec);   //  oluşturduğum seçme işlemindeki sorguyu burada çalıştırıyorum  ve sonuç içerisine atıyorum
                                         
        
          if($sonuc->num_rows>0){ // Satır sayımız 0 dan büyük ise yani verimiz varsa.
                 while($cek=$sonuc->fetch_assoc()){ // fetch_assoc() sayesinde tablomuzdaki tüm verileri alıyoruz ve bunları cek dizisi içine atıyoruz Ve ekranda görüntüleyebiliyoruz.
                 
                  //tablo içerisine satır ve sütun ekleyelim. adsoyad burada veritabanındaki sütun ismidir.
                  echo " 
                  <tr>
                  <td>".$cek['adsoyad']."</td>
                  <td>".$cek['telefon']."</td>
                  <td>".$cek['email']."</td>
                  <td>".$cek['konu']."</td>
                  <td><a id='silme' href ='silme.php?mesaj=".$cek['mesaj']."'>Sil</a>".$cek['mesaj']."</td>
                  </tr>
                  ";
                 }        
                }
          
          else{
                  
                  echo "Veritabanında Kayıtlı veri bulunamamıştır";
          }
        }
     
?>
</table>
</body>
</html>

