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
        require_once 'GetSet.php';
        $c1=new Caneta();
        $c1->setModelo("fit");
        $c1->setPonta(0.5);
        print_r($c1);

        $c2=new Caneta();
        $c2->setModelo("caneta top");
        $c2->setPonta(0.7);
        print_r($c2);

        $c3=new Caneta();
            print_r($c3);

            $c4=new Caneta();
            print_r($c4);
        

    
    ?>
    </pre>
</body>
</html>