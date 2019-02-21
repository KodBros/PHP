<!DOCTYPE html>
<html>
<body>

<?php
    $a=20;
    $b=15;
    $toplam=$a+$b;
    echo "a+b = "."$toplam </br>"; 

    function topla(){
        global $a;
        global $b;
        global $x;
        $x=$a-$b;
    }
    topla();
    echo "a = ".$a."</br>"."b = ".$b."</br>"."x = ".$x;
?>

</body>
</html>
