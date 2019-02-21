<!DOCTYPE html>
<html>
<body>

<?php
    $a=20;
    $b=15;
    $toplam=$a+$b;
    echo "a+b = "."$toplam </br></br>"; 

    function topla(){
        global $a;
        global $b;
        global $x;
        $x=$a-$b;
    }
    topla();
    echo "a = ".$a."</br>"."b = ".$b."</br></br>"."x = ".$x."</br></br>";

    $t=10;
    $t++;
    echo "t = $t";
?>

</body>
</html>
