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
    require_once "Video.php";
    require_once "Pessoa.php";
    require_once "Gafanhoto.php";
    $v[0] = new Video("Aula de POO");
    $v[1]=new Video("Aula 12 de PHP");
    $v[2]=new Video("Aula 15 de HTML");
    $g[0]=new Gafanhoto("Jubileu",22,"M","JUBA");
    print_r($g);
    ?>
    </pre>
</body>
</html>