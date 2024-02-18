<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ContaBanco.php';
        
        $c1=new ContaBanco;
        $c1->abrirConta("cp");
        print_r($c1);
        $c1->depositar(25);
        print_r($c1);
        $c1->sacar(70);
        print_r($c1);
        $c1->pagarMensal();
        print_r($c1);
       
        
    
    ?>
    </pre>
</body>
</html>