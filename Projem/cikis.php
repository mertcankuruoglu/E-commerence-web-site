<?php

session_start();  //sessionı başlattık.

$_SESSION=array();

session_destroy(); // session kapanma methodu. Oturum sonlandırma.

header("location:panelgiris.php"); //Oturum sonlandıktan sonra yönlendirme işlemi.

?>