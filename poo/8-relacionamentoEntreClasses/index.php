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
        require_once "Luta.php";
        //$l=new Lutador("Calebe","Brasil",36,1.75,10,3,1,83);
        //print_r($l);
        $l=array();
        $l[0]=new Lutador("Calebe","Brasil",36,1.75,10,3,1,83);
        $l[1]=new Lutador ("Pony","Roraima",13,1.62,3,1,1,82);
        $l[2]=new Lutador ("Danie","Roraima",40,1.62,3,1,1,62);
        $l[3]=new Lutador ("Sauri","Roraima",12,1.62,3,1,1,83);
        $l[4]=new Lutador ("Rambo","EUA",1,1.90,0,1,1,83);
         $teste = new Luta();
         $teste->marcarLuta($l[3],$l[4]);
         $teste->lutar();
         $l[3]->status();
         $l[4]->status();
    ?>
    </pre>
</body>
</html>