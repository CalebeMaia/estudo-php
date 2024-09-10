<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <?php 
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    
    ?>
    <div id="corpo"> 
    <?php include_once "topo.php"; ?>
        <?php 
            $c=$_GET['cod']??0;// tenta pegar esse id da url que está no banco caso nao consiga coloque zero, caso ele pegue executa o codigo abaixo
            $busca=$banco->query("select * from jogos where cod='$c'");
        ?>
    <h1>Detalhes do jogo</h1>
        <table class='detalhes'>
            <?php 
            if(!$busca){
                echo "<tr><td>Busca falhou! $banco->error";
            }else{
                if($busca->num_rows==1){
                    $reg=$busca->fetch_object();
                    $t=thumb($reg->capa);
                    echo  "<tr><td rowspan='3'><img src='$t' class='full'/>";
                    echo  "<td><h2>$reg->nome</h2>";
                    echo  "  <tr><td>$reg->nota";
                    echo  "  <tr><td>$reg->descricao";
                    echo  " <tr><td>Adm";
                }else{
                    echo "<tr><td>Nenhum registro encontrado";
                }
            }
               
            
              
            ?>
            <a href="index.php"><img src="icones/icoback.png"/></a> 
            
        </table>
    </div>
</body>
</html>