<?php

include("baglanti.php");


if(isset($_GET['mesaj'])){

    $mesaj = $_GET['mesaj'];
    $query = "DELETE FROM iletisim WHERE mesaj  = '$mesaj'";
    $run   =  mysqli_query($baglan,$query);
    if($run){
        header('location:panel.php');
    }
    else{
        echo "Error:".mysqli_error($baglan);
    }

}


?>