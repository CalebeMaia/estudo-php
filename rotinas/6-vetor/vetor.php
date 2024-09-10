<pre>
<?php 
    // 1- formas de declarar vetores
    $n=array(3,12,3,43);
    $n[]=45; // posso inserir desta forma um vetor
    print_r($n);
    echo "==============================";
// 2- outra forma
    $c=range(5,20,5);// desta forma ele vai criar um vetor de 4 posiçoes, o primeiro 5 vai ser o primeiro vetor na posição 0, o valor 20 vai ficar na última posição, é o último 5 representa um saldo de 5 em 5 até chegar em 20. 
    print_r($c);
    echo "<p>==============================</p>";
    //=================================================
    //3- outra forma
    $d=range(5,20,5);
   foreach($d as $v){//essa estrutura mostra os valores colocados dentro do vetor
        echo "$v <br>";
   }
   //============================================================
   //4- outra forma
   $v=array(0=>5,
            1=>9,
            2=>8,
            3=>7
           
);
unset($v[0]);// apaga o vetor na posição zero
print_r($v);
//=====================================================
//5- outra forma
//outra forma de declarar vetores
// chaves associativas
    $cad=array("nome"=>"Ana",
                "idade"=>23,
                "peso"=>78.5);
                $cad["fuma"]=true; // aqui adiciona mais um vetor
                print_r($cad);
//============================================================
//usando forech no exemplo acima
foreach ($cad as $campo=>$valor) {
    echo "o valor de $campo é $valor";
}

?>
</pre>