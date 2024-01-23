<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicional</title>
</head>
<body>
    <?php
        $a=isset($_GET["ano"])?$_GET["ano"]:1900;
        $i=date("Y")-$a;

        if($i<18){
            echo "sua idade é $i não pode voltar";
        } else{

            echo "sua idade $i pode votar";
        } 
    
    ?>
</body>
</html>