<?php 
//aqui é o update
    require_once 'config.php';
    $usuario=[]; //monta
    $id=filter_input(INPUT_GET,'id');//esse comando pega o id passado pela url ou quando passa o mouse em delete ou modificar
    if($id){
        $sql=$pdo->prepare("SELECT*FROM usuario WHERE id =:id");//esse comando é um select no banco
        $sql->bindValue(':id',$id);
        $sql->execute();
        // se deu tudo certo ele cai no if abaixo
        if($sql->rowCount()>0){
            $usuario=$sql->fetch(PDO::FETCH_ASSOC);// variavel $usuario recebe o retorno do banco e joga na variavel $sql e uso o metodo fetch que ira mapear um a um
        }else{
            header("Location:index.php");
            exit;
        }
    }else{
        header("Location:index.php");
    }
?>
<h1>Editar usuário</h1>
<form action="editar_action.php" method="POST">
    <input type="hidden" name="id"value="<?=$usuario['id'];?>"/>
    <label>
       Nome:<input type="text" name="nome"value="<?=$usuario['nome'];?>"/>
    </label>
    <label>
      Email:<input type="text" name="email"value="<?=$usuario['email'];?>"/>
    </label>
    <input type="submit" value="Atualizar"/>

</form>