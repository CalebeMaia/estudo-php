<?php 
    require_once 'config.php';
    $nome =filter_input(INPUT_POST, 'nome'); // aqui ele pegar o valor do arquivo cadastrar.php
    $email =filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);//aqui ele pegar o valor do arquivo cadastrar.php, o comando FILTER_VALIDATE_EMAIL serve para validar o email ou seja so envia o formulario se tiver preenchido o campo formulário
    //==================================================================================
    //abaixo sera feito a tratativa para não ocorrer duplicidade no cadastro
    if($nome && $email){
        $sql=$pdo->prepare(" SELECT * FROM usuario WHERE email=:email");// aqui faz a chamada no banco e verifica se na tabela usuario no campo email e igual ao email digitado no formulário que recebe o nome de email
        $sql->bindValue(':email',$email);
        $sql->execute();

        if($sql->rowCount()===0){//nessa linha esse if verifica se tem algum arquivo com nome passado no formulário
            $sql=$pdo->prepare("INSERT INTO usuario(nome,email)VALUES(:nome,:email)"); //prepare serve para chamar a tabela do banco, dentro do prepare tem a chamada do banco
        $sql->bindValue(':nome',$nome);//bindValue esse comando pega o nome digitado
        $sql->bindValue(':email',$email);//bindValue esse comando pega o email digitado
        $sql->execute();
        header("Location:index.php");// após executar o comando submit ele redireciona para pagina index.php
        exit;
        }else{
            header("Location: cadastrar.php");
        }
        
    }else{
        header("Location: cadastrar.php");
    }
    //==================================================================================




  

?>