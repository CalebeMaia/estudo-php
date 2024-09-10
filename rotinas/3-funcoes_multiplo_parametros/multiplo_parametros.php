<?php 
    function soma(){
        $p=func_get_args();// pega todos os argumentos de um vetor e coloca na variavel p
        $tot=func_num_args();//retorna o numero de argumento ou seja numero de vetores
        $s=0;
        for($i=0;$i<$tot;$i++){
            $s=$s+$p[$i];
        }
        return $s;
    }
    $r=soma(3,5,2,40);
    echo "A soma dos valores e $r ";


?>