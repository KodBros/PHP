<!DOCTYPE html>
<html>
<body>

<?php
    $sayilar = array(1,2,8,3,5);

    echo "Dizide bulunan eleman sayısı : ".count($sayilar)."</br>";

    echo "2. indisteki eleman : ".$sayilar[2]."</br>";

    print_r($sayilar)."</br>";

    sort($sayilar);    //Küçükten büyüğe sıralama.
    echo "</br>";
    print_r($sayilar);

    rsort($sayilar);     //Büyükten küçüğe sıralama.
    echo "</br>";
    print_r($sayilar);

    echo "</br>";
    echo "Dizinin en büyük elemanı : ".max($sayilar)."</br>";
    echo "Dizinin en küçük elemanı : ".min($sayilar)."</br>";
    if (in_array(20,$sayilar)) {
      echo "'20' elemanı dizide var.";
    }
    else {
      echo "'20' elemanı dizide yok.";
    }
    echo "</br>";

    $metin = array("Bilgisayar","Mühendisliği","Bölümü");
    echo implode("_" , $metin); //elemanların arasına _ koyar. 
?>

</body>
</html>
