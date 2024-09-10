<?php 
// vamos abrir a sessão pois só pode cair nessa pagina se tiver logada
    session_start();
    if(!isset($_SESSION['id_usuario'])){// se a pessoa nao tiver setado o id do usuario entao volta para o index
        header("location:index.php");
        exit;
    }
?>

Bem vindo vc logou!!
<a href="sair.php">sair</a>