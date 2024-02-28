<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercitando Herança</title>
</head>
<body>
    <pre>
    <?php 
        require_once "Pessoa.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";
        //$pessoa=new Pessoa(); não pode ser criada pois e uma classe abstrata
        /*$visitante=new Visitante();
        $visitante->setNome("calebe");
        echo  "olá {$visitante->getNome()} ";
        $aluno=new Aluno();
        $aluno->setMatricula(34);
        print_r($aluno);*/
        $visitante=new Visitante();
         


    
    ?>
    </pre>
</body>
</html>