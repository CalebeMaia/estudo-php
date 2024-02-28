<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Herança</title>
    <pre>
    <?php 
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Funcionario.php";
        $p1=new Pessoa();
        $p2=new Aluno();
        $p3=new Professor();
        $p4=new Funcionario();

        $p1->setNome("calebe");
        $p2->setNome("Anabel");
        $p3->setNome("Danielle");
        $p4->setNome("vandame");
        $p2->setCurso("6 ano");
        $p2->setMatr(001);
        $p2->setSexo("F");
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);

    
    ?>
    </pre>

</head>
<body>
    
</body>
</html>