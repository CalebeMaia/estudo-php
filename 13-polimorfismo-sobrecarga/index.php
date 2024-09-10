<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
</head>
<body>
    <?php 
    require_once "Mamifero.php";
    require_once "Cachorro.php";
        $c=new Cachorro();
        $c->reagirDono(false);
        $c->reagirFrase("vai apanhar");

    
    ?>
</body>
</html>