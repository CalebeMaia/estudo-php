
<?php 
//procedimentos recebe parametros
    function soma($a,$b){
        $s=$a+$b;
        echo "<p> a soma vale $s </p>";
    }
    soma(3,4);// aqui entra os parametros
    soma(8,2);
    $x=9;
    $y=15;
    soma($x,$y);
?>