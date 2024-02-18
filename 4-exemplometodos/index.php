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
        require_once 'Caneta.php';
        $c1=new Caneta();
        //$c1->setModelo("Bic"); 
        // posso atribuir um valor também desta forma
        //#############################
        //$c1->modelo="Bic";
        //#############################
        $c1->setPonta(0.5);
        //print_r($c1);
        print "eu tenho uma caneta {$c1->getModelo()} de pont {$c1->getPonta()} e ela está {$c1->tampada}";
        //coloca as chaves para interporlar 
    //#########################################################

    
    ?>
    </pre>
</body>
</html>