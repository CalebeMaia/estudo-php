<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
        require_once "Lutador.php";
        $l=new Lutador("Calebe","Brasil",36,1.75,10,3,1,83);
        //print_r($l);
        $l->apresentar();

    ?>
    </pre>
</body>
</html>