<?php 
    function teste($x){
        $x+=2;
        echo "<p>o valor de x e $x</p>";
    }   
    $a=3;
    teste($a);
    echo "<p> o valor de A e $a </p>";
//======================================
function teste2(&$x){// foi colocado o & para receber o valor por parametro
    $x+=2;
    echo "<p>o valor de x e $x</p>";
}   
$a=3;
teste2($a);
echo "<p> o valor de A e $a </p>";
?>