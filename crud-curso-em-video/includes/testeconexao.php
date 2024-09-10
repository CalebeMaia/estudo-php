<pre>
<?php 
   // esse arquivo e apenas de teste
   //conexão com banco msqli
    //$banco=new mysqli(host,usuario,senha,banco);//host é onde esta hospedado o banco de dados, usuario é o que usa o banco, senha do banco, e o nome do banco de dados
   $banco=new mysqli("localhost","root","","bd_games");//forma de conectar o banco, utilizando o mysqli
    if($banco->connect_errno){//$banco->connect_errno->esse comando retorna o numero do erro
        echo "<p>Encontrei um erro $banco->errno $banco->connect_error</p>";
        die();// encerra a execução
    }
    /*$banco->query("SET NAMES 'utf8'");
    $banco->query("SETcharacter_set_connection=utf8");
    $banco->query("SET character_set_client=utf8");
    $banco->query("SET character_set_results=utf8");
    esse codigo corrigi os caracteres*/

    $busca=$banco->query("select*from generos");//a query e um método interno
    if(!$busca){
        echo "<p>Falha na busca! $banco->error </p>";
        
    }else{
       while( $reg=$busca->fetch_object()){ // crio um obejto $reg e a fetch_object() pega os valores do vetor e põe no objeto $reg;
        print_r($reg);
    }
    }
?>
</pre>