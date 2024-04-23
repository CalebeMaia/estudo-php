<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Controle remoto</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ControleRemoto.php';
        $c=new ControleRemoto;
        $c->setLigado(true);
        $c->setTocando(true);
        $c->maisVolume();
        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        print_r($c);
    ?>
    </pre>
</body>
</html>