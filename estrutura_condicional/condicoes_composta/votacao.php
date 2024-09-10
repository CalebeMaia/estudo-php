<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>votacao com varios if</title>
</head>
<body>
    <?php 
        $a1=$_GET["ano"];
        $n1=date("Y")-$a1;
        echo "$n1";
        if($n1<16){
            echo "proibido voltar";
        }else{
            if($n1>18 && $n1<65){
                echo"obrigatório";
            }else{
                if($n1>=16&&$n1<=17||$n1>65)
                echo "voto opcional";
            }
        }
        
    ?>
</body>
</html>