<?php  
    require_once 'config.php';
    $id=filter_input(INPUT_POST,'id');//esse comando pega o id passado pela url ou quando passa o mouse em delete ou modificar
    $nome=filter_input(INPUT_POST,'nome');//verificar no editar.php se foi passado metoo post ou get
    $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);// faz a validação para ver se está chegando email
    if($id&& $nome&& $email){//aqui ele verificar recebeu os 3 parametros
        $sql=$pdo->prepare("UPDATE usuario SET nome =:nome,email=:email WHERE id=:id");//nome =:nome--> nesse campo o primeiro nome refere-se o campo nome e o segundo nome é a variavel nome passado no if. no primeiro id, ele está referenciando o id do banco de dados e o :id está referenciando o id da linha 3 neste codigo
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':id',$id);
        $sql->execute();
        header("Location:index.php");
        exit;
    }else{
        header("Location:index.php");
        exit;
      
    }
?>