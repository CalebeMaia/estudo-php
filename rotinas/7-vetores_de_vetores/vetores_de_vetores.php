<pre>
<?php 
    // esse exemplo são vetores dentro de vetores
    $m=array(   3,
                4,
                5);
                print_r($m);
//=================================
    $n=array(   array(6,4),
                array(4,9),
                array(3,2));
                $n[0][1]=$n[2][0];// o primeir zero e a linha o numero 1 e a coluna
                print_r($n);

?>
</pre>