<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  caret-color:red;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelgiris.php" method="POST" style="max-width:500px;margin:auto">
  <h2>Kuruoğlu-Ticaret Panel Girişi</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adınız" name="usrnm">
  </div>
 
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Parola" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>
<?php

session_start(); // oturum başlatmak için methoddur.

  if(isset($_POST["usrnm"], $_POST["psw"])){  // Veri girilmişmi diye bakıyorum

   if($_POST["usrnm"]=="mertcan" && $_POST["psw"]=="617213362m"){
           
       //kullanıcı bilgilerimin sessiona atılmasını istiyorum

       $_SESSION["user"]=$_POST["usrnm"]; //giriş bigilerimizi sessionın user değerine atmış olduk.
       header("location:panel.php");  // gideceği konumu gösteriyoruz
       // yani verimizi aldık bilgilerimiz doğru, bizi panel php sayfasına götürüyor.
    
   }
   else{ // Bilgilerimiz doğru değilse
          
    echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış')</script>";
   }

  }   

?>