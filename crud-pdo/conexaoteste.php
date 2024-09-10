<?php
    //utilizamos o pdo pois ele é POO
   // $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root",""); // o pdo minúsculo é uma variável, e pode ser utilizada em qualquer nome, já o PDO maiúsculo  é uma função que precisa passar 4 parametros
   //-----------------conexão-----------------------
    try {
        $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
        
    } catch (PDOException $e) {
       // quando cair aqui é erro de banco de dados
       echo "Erro na conexão com banco".$e->getMessage();
    } catch(Exception $e){
        echo "erro generico:".$e->getMessage();
    }
//--------------------insert------------------------
// 1 forma  de fazer um insert  
//$res=$pdo->prepare("INSERT INTO pessoa(nome,telefone,email)VALUES (:n,:t,:e)");//serve para quando passarmos um parametro e depois substituir o valor
//$res->bindValue("n","Calebe");// aceita variaveis e funções
//$res->bindValue("t","123456");
//$res->bindValue("e","calebemaia@gmail.com");
//$res->execute();


//$res->bindparam();// esse tipo não aceita um para metro passado diretamente, aceira apenas variaveis




// 2 forma de fazer insert e mais utilizada
   // $pdo->query();//quando já tem os valores e não precisa substituir nenhum valor
 // $pdo->query("INSERT INTO pessoa(nome,telefone,email)VALUES('Danielle','123456','Danielle@gmail.com')");

  //------------- DELETE------------------------
   // $cmd=$pdo->prepare("DELETE FROM pessoa WHERE id =:id");
   // $id=5;
  //  $cmd->bindValue(":id",$id);
  //  $cmd->execute();

// ou
    //$res=$pdo->query("DELETE FROM pessoa WHERE id='3'");

//-------------------UPDATE ----------------------
    //$cmd=$pdo->prepare("UPDATE pessoa SET email=:e WHERE id=:id");
    //$cmd->bindValue(":e","careca@gmail.com");
    //$cmd->bindValue(":id",1);
    //$cmd->execute();
    //outra forma
    $res=$pdo->query("UPDATE pessoa SET email='pony@gmail.com'WHERE id='1'");

  //------------- SELECT --------------------------
    $cmd=$pdo->prepare("SELECT * FROM pessoa WHERE id =:id");
    $cmd->bindValue(":id",4);
    $cmd->execute();
    $resultado=$cmd->fetch(PDO::FETCH_ASSOC);
        foreach ($resultado as $key =>$value){
            echo $key.":".$value. "<br>";
        }
?>
