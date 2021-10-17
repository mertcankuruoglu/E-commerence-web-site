<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>    <!--Font Awesome Kütüphanesini ekledim-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- Font için google kütüphane-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> <!-- Font için google kütüphane-->
    <link rel="stylesheet" href="owl/owl.carousel.min.css"> <!--Hareketli Carousel-->
    <link rel="stylesheet" href="owl/owl.theme.default.min.css"> <!--Hareketli Carousel-->
    <title>Anasayfa | Kuruoğlu Ticaret</title>
</head>
<body>
    <section id="menu"> 

        <div id="logo">Kuruoğlu Ticaret Ambalaj/Poşet <small>Ankara-Yenikent</small></div>
        <nav> <!--Menü Alanı-->
             
            <a href=""><i class="fas fa-home icon"></i>Anasayfa</a>
            <a href="#hakkimizda"><i class="fas fa-info-circle icon"></i>Hakkımızda</a>
            <a href="#urunler"><i class="fas fa-shopping-cart icon"></i>Ürünlerimiz</a>
            <a href="#ekip"><i class="fas fa-users icon"></i>Ekip</a>
            <a href="#iletisim"><i class="fas fa-map-pin icon"></i>İletişim</a>
            
        </nav>
    </section>
    <!--Banner Bölümü Başlangıç-->
    <section id="anasayfa">
          
        <div id="black"> <!--Arka Perde -->
      
        </div>
        <div id="icerik">
          <h2>Kuruoğlu Ticaret</h2>
          <hr width="300" align="left">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quae minus obcaecati ipsa molestiae laborum iure similique totam eum excepturi, laboriosam ullam atque itaque quisquam voluptatum dolores facilis. Similique, debitis.</p>
        </div>
   
    </section>
    <!--Banner Bölümü Bitiş-->
    <!--Hakkımızda Kısmı Başlangıç-->
       <section id="hakkimizda">

            <h3>Hakkımızda</h3>
            <div class="container">
                <div id="sol">
                <h5 id="h5sol">Kuruoğlu Ticaret</h5>
            </div>
            <div id="sag">
                <span>K</span>
                <p id="psag">uruoğlu Ticaret Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe labore ipsam cupiditate recusandae debitis, unde magnam optio ab, culpa animi laboriosam suscipit.</p>
            </div>
                <img src="../Projem/resimler/about.jpg" alt="" class="img fluid mt100">
                <p id="pson">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam architecto incidunt, ad quia adipisci sapiente cum earum ratione doloremque? Voluptatem vero perspiciatis repellat pariatur ducimus, omnis adipisci. Necessitatibus, hic deleniti!</p>

            </div>
       </section>
       <!--Hakkımızda Kısmı Bitiş-->

       <!--Ürünlerimiz Kısmı Başlangıç-->
          <section id="urunler" >
              <div class="container">
                 <h3>Ürünlerimiz</h3>
              </div> 

              <div class="owl-carousel owl-theme"> <!--Kartlarımızın bir arada bulunduğu div-->
              
                <div class="card item" data-merge="1.5"> <!-- data merge 1.5 demek 1.5 kutuluk yer kaplasın-->
                    <img src="resimler/bardak.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">30cc Karton Bardak</h5>
                    <hr>
                    <p class="cardp">10X15 boyutlarında sıcağa dayanıklı Karton tek kullanımlık bardak</p>
                </div>
                <div class="card item"  data-merge="1.5">
                    <img src="resimler/bardak.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">30cc Karton Bardak</h5>
                    <hr>
                    <p class="cardp">10X15 boyutlarında sıcağa dayanıklı Karton tek kullanımlık bardak</p>
                </div>
                
              
              </div>

          </section>

              <!--Ürünlerimiz Kısmı Bitiş-->

           <!--JavaScript ve JQuery kodları Başlangıç-->
        <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
        <script src="owl/owl.carousel.min.js"></script>
        <script src="owl/script.js"></script>
          <!--JavaScript ve JQuery kodları Bitiş-->

           <!--Ekip Kısmı Başlangıç-->

           <section id="ekip">

             <div class="container">
                 <h3 id="ekiph3">Ekip</h3>

                 <div class="sutun-sol-sag">
                      <img src="resimler/mertcan.jpg" class="img-fluid oval"> <!--Resim tam oturması için class yazdık-->
                      <h4 class="ekipisim">Mertcan Kuruoğlu</h4>
                      <p class="ekipp">Full-Stack Developer</p>
                      <div class="ekipsocial"> <!--iconlarımın birlikte olabilmesi için div oluşturdum.-->
                           <a href="#"><i class="fab fa-facebook-f social"></i></a>
                           <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                           <a href="#"><i class="fab fa-twitter social"></i></a>
                           
                      </div>
                 </div>
                 <div class="sutun">
                    <img src="resimler/mertcan.jpg" class="img-fluid oval"> <!--Resim tam oturması için class yazdık-->
                    <h4 class="ekipisim">Mertcan Kuruoğlu</h4>
                    <p class="ekipp">CEO-Founder</p>
                    <div class="ekipsocial"> <!--iconlarımın birlikte olabilmesi için div oluşturdum.-->
                         <a href="#"><i class="fab fa-facebook-f social"></i></a>
                         <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                         <a href="#"><i class="fab fa-twitter social"></i></a>
                         
                    </div>
               </div>
               <div class="sutun-sol-sag">
                <img src="resimler/mertcan.jpg" class="img-fluid oval"> <!--Resim tam oturması için class yazdık-->
                <h4 class="ekipisim">Mertcan Kuruoğlu</h4>
                <p class="ekipp">Back-End Developer</p>
                <div class="ekipsocial"> <!--iconlarımın birlikte olabilmesi için div oluşturdum.-->
                     <a href="#"><i class="fab fa-facebook-f social"></i></a>
                     <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                     <a href="#"><i class="fab fa-twitter social"></i></a>
                     
                </div>
           </div>
             </div>

           </section>

            <!--Ekip Kısmı Bitiş-->

            <!--İletişim Kısmı Başlangıç-->
         
            <section id="iletisim">
                <div class="container">
                    <h3 id="h3iletisim">İletişim</h3>
                    <form action="index.php" method="POST">
                    <div id="iletisimopak"> <!--Arka planı şeffaf olan div bu-->
                        <div id="formgroup"> <!--Form alanını tutacak olan div-->
                         <div id="solform">
                             <input type="text" name="isim" placeholder="Ad Soyad" required class="formcontrol">
                             <input type="text" name="telno" placeholder="Telefon Numarası" required class="formcontrol">
                         </div>
                         <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="formcontrol">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="formcontrol">
                         </div>
                         <textarea name="mesaj" id="sabitboyut" cols="30" rows="10" placeholder="Mesajınızı Girin" required class="formcontrol" style="resize: none;"></textarea>
                         <input type="submit" value="Gönder">
                        </div>
                            <div id="adress">
                                 <h4 id="adresbaslik">Adres: </h4>
                                  <p class="adressp">Mustafa Kemal Mahallesi</p>
                                  <p class="adressp">Karanfil Sokak Belediye Çarşısı</p>
                                  <p class="adressp"> No:2/C, 06946 Sincan/Ankara</p>
                                  <p class="adressp">0535 597 33 83</p>
                                  <p class="adressp">Email: kuruogluticaret@kuruogluticaret.com</p>
                        </div>
                        </div>
                    </div>
                </div>
                </form>
                        <footer>
                            <div id="copyright">
                                 2021 | Tüm Hakları &copy; Saklıdır.
                                   <div id="socialfooter">
                                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                                    <a href="#"><i class="fab fa-twitter social"></i></a>
                                   </div>
                            </div>
                            <a href="#menu" id="up"><i class="fas fa-angle-up"></i></a>
                        </footer>
            </section>
            <!--İletişim Kısmı Bitiş-->
</body>
</html>
 <!--php kodlarımı istediğim yere yazarım ama en altı tercih ettim -->

 <?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["telno"] ,$_POST["mail"] ,$_POST["konu"], $_POST["mesaj"])){ //Formun içerisinde veri var mı diye bakıyor. Eğer Doluysa
       
    $adsoyad=$_POST["isim"]; // bir değişkene atıyoruz form elemanlarının değerini.
    $telefon=$_POST["telno"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    // Artık ekleme kısmına geçebiliriz
    //$ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('Asuman', '05368551252', 'mail@mail.com', 'iade', 'iademiz var')"; // kendimiz girmicez değerleri

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."', '".$telefon."', '".$email."', '".$konu."', '".$mesaj."')"; // nokta ve çift tırnak yerlerine dikkat et.

      if($baglan->query($ekle)===TRUE){ //eklediyse bize bir mesaj versin
           
             echo "<script>alert('Mesajınız Başarı ile Gönderildi')</script>";// mesajı javascipt ile verdiricez :) 
      } 

     else { // Düzgün çalışmıyor ve veri eklemiyorsa veritabanına
           echo "<script>alert('Mesajınız Gönderilmedi Tekrar Deneyin')</script>";
     }
} 



?>
