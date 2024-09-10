<?php 
    require_once 'config.php';
    //=====================================================
    // após fazer a inserção dos dados, vamos fazer o select
    $lista=[];//aqui a lista vai receber um array
    $sql=$pdo->query("SELECT * FROM usuario");//aqui executamos a consulta no banco
    if($sql->rowCount()>0){//esse if é executado se tiver algo no banco e armazena tudo na variavel $sql
        $lista=$sql->fetchAll(PDO::FETCH_ASSOC);//retorna um array contendo todas os registros remanescentes no conjunto de resultados
    }
    //=====================================================

?>
<h1>Listagem de usuario</h1>
<table border='1'>
    <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario):// aqui pega os resultados na variavel lista e joga linha a linha na variavel $usuario
        ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[Editar]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="cadastrar.php">Cadastrar Pessoa</a>