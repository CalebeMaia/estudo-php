<!-- esse é o segundo arquivo a ser criado -->
<?php 
    require_once 'CLASSES/usuario.php';//classes em maiusculo e uma pasta criada
    $u=new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
    <link rel="stylesheet" href="CSS/estilo.css"> <!--aqui aponta para o arquivo css--> 
</head>
<body>
    <div id="corpo-form-Cad">
    <h1>CADASTRAR</h1>
    <form method="POST" > <!-- método post serve para mandar a informação oculta e o action e o nome da página que recebera os parametros -->
    <input type="text" name="nome" placeholder="Nome Completo" maxlength="30" ><!-- o maxlength tem a função de limitar a quantidade de caractere digitado  -->
    <input type="text" name="telefone" placeholder="Telefone"maxlength="30">
    <input type="email" name="email" placeholder="Usuário"maxlength="40">
    <input type="password" name="senha" placeholder="Senha"maxlength="15">
    <input type="password" name="confSenha" placeholder="Confirmar Senha"maxlength="15">
    <input type="submit" value="CADASTRAR">
    
</form>
</div>
<?php 
    //verificar se clicou no botão 
    if(isset($_POST['nome']))//isset verificar a existencia de um array ou variavel passado pelo método POST
    {
        $nome=addslashes($_POST['nome']);//addslashes serve para evitar um injeção de dados segurança contra harker
        $telefone=addslashes($_POST['telefone']);
        $email=addslashes($_POST['email']);
        $senha=addslashes($_POST['senha']);
        $confirmarSenha=addslashes($_POST['confSenha']);
        // o código abaixo verificar se o formulário foi todo preenchido
        if(!empty($nome)&&!empty($telefone)&&!empty($email)&&!empty($senha)&&!empty($confirmarSenha))
        {
            $u->conectar("projeto_login","localhost","root","");// aqui tem que passar as variaveis de conexão
            if($u->msgErro=="")// se esta tudo ok
            {
                    if($senha==$confirmarSenha){
                        if ($u->cadastrar($nome,$telefone,$email,$senha)){
                            ?> 
                            <div id="msg-sucesso"> Cadastrado com sucesso! Acesse para entrar! </div>
                            <?php 
                        }
                        else{
                             ?>
                           <div class="msg-erro"> Email já cadastrado </div>
                            <?php
                        }
                    }else{
                         ?>
                         <div class="msg-erro">a senha não confere</div>
                        <?php
                    }
               
            }
            else{//esse else indica que o formulário foi preenchido com erro
                 ?>
                 <div class="msg-erro">
                <?php echo "Erro: ".$u->msgErro; ?>
                </div>
                <?php
            }
        }
        else
        {
             ?>
             <div class="msg-erro">Preecha todos os campos!</div>
          
            <?php
        }
        
    }

?>
</body>
</html>