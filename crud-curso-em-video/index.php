<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Crud em PHP</title>
</head>
<body>
    <?php 
        //include "includes/banco.php"; o include ele carrega o arquivo porém se nao existir ele continua
        require_once "includes/banco.php";// o require_once caso o arquivo nâo exista ele para
        require_once "includes/funcoes.php";
        $ordem=$_GET['o']?? "n";
        $chave=$_GET['c']??"";

    ?>
    <div id="corpo">
        <?php include_once "topo.php"; ?>
        <h1>Escolha seu Jogo</h1>
        <form action="index.php" method="get" id="busca">
            ordenar:
            <a href="index.php?o=n&c=<?php echo $chave;?>">Nome|</a><!-- a ancora cria link e-->
            <a href="index.php?o=p&c=<?php echo $chave;?>">Produtora|</a>
            <a href="index.php?o=n1&c=<?php echo $chave;?>">Nota Alta|</a>
            <a href="index.php?o=n2&c=<?php echo $chave;?>">Nota Baixa|</a>
            <a href="index.php">Mostrar todos|</a>
            Buscar:<input type="text" name="c" size="10" maxlength="40"/>
            <input type="submit" value="ok"/>
        </form>
        <table class="listagem">
            <?php 
                $q="select j.cod, j.nome, g.genero, p.produtora, j.capa from jogos j join generos g on j.genero= g.cod join produtoras p on j.produtora = p.cod "; // no "p.cod" tem que dar uma barra de espaço para poder concatenar com switch
                if(!empty($chave)){// esse comando diz, se essa chave não estiver vazia
                    $q.="WHERE j.nome like '%$chave%' OR p.produtora like '%$chave%' OR g.genero like '%$chave%' ";// deixa o espaço 
                }
                switch($ordem){// aqui são os filtros do php
                    case "p":
                    $q.="ORDER BY p.produtora";
                    break;
                    case "n1":
                        $q.="ORDER BY j.nota DESC";
                        break;
                        case "n2";
                        $q.="ORDER BY j.nota ASC";
                        break;
                        default:
                        $q.="ORDER BY j.nome";
                        break;
                }
                 $busca=$banco->query($q);
                // modificando para o codigo de cima $busca=$banco->query("select*from jogos order by nome");//a query e um método interno
                if(!$busca){
                    echo "<p>Falha na busca! $banco->error </p>";
                    
                }else{
                    if($busca->num_rows==0){//num_rows retorna o numero de registro encontrado
                        echo "<tr><td>Nenhum registro encontrado";
                    }else{
                   while( $reg=$busca->fetch_object()){ // crio um obejto $reg e a fetch_object() pega os valores do vetor e põe no objeto $reg;
                    $t=thumb($reg->capa);
                    echo "<tr><td><img src='$t' class='mini'/>";
                    echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>";
                    echo "$reg->genero";
                    echo "<br>$reg->produtora";
                    // nunca salve imagem em banco dados pois caso corrompa o banco, ficará muito dificil de recuperar  as imagens do banco, recomendado salvar em uma pasta especifica e salvar no banco de dados a referencia das fotos
                   
                    /* echo "<tr><td><img src='fotos/$reg->capa' class='mini'/><td>$reg->nome";// nunca salve imagem em banco dados pois caso corrompa o banco, ficará muito dificil de recuperar  as imagens do banco, recomendado salvar em uma pasta especifica e salvar no banco de dados a referencia das fotos*/
                }
                }
            }
            ?>
        </table>
    </div>
    <?php 
    // esse fechamento do banco foi para o rodape $banco->close();
    include_once "rodape.php";
    ?>
</body>
</html>