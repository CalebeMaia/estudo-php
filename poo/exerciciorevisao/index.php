<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <PRE>
    <?php 
        require_once "Pessoa.php";
        require_once "Livro.php";
        $p[0]=new Pessoa(" Calebe ",36," M ");
        $p[1]=new Pessoa(" Dainielle ",44," F ");
        $p[2]=new Pessoa(" Anabel ",12," F ");

        $l[0]=new Livro(" Dragões ","BY y DI",500,$p[0]);
        $l[1]=new Livro(" COMO FICAR RICO "," DOLPHIN ",275,$p[1]);

        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();
        $l[0]->detalhes();
        
    ?>
    </PRE>
</body>
</html>