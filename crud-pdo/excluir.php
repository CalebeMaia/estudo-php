<?php 
require_once 'config.php';
// a ideia do excluir e pegar o id capturado pela url e jogar em uma variavel
$id=filter_input(INPUT_GET,'id');// ele pega esse id da pagina index.php pagina 29
if($id){
    $sql=$pdo->prepare("DELETE From usuario WHERE id=:id");
    $sql->bindValue(':id',$id);
    $sql->execute();
}
header("Location: index.php");
?>