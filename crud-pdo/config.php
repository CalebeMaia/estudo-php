<?php 
    $db_name='test';
    $db_host='localhost';
    $db_user='root';
    $db_password='';

    $pdo =new PDO("mysql:dbname=".$db_name.";host=".$db_host,$db_user,$db_password)
    // essa conexao pode ser feita assim $pdo =new PDO("mysql:dbname=test;host=localhost:3306","root","");//primeiro eu começo declarando uma variavel no exemplo usei $pdo, poderia ser qualquer nome de variavel logo em seguida crio uma istancia do PDO que serve para criar uma conexão com banco de dados,feito isso vou passar os parametros("mysql:dbnames é o padrao do nome= aqui entra o nome da base dados sem aspa;host=localhost:3307","root","");


?>