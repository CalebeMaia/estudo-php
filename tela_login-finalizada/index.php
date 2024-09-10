<!-- esse é o primeiro arquivo a ser criado -->
<?php 
    require_once "CLASSES/usuario.php";
    //vamos instancia a classe
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
    <div id="corpo-form">
    <h1>ENTRAR</h1>
    <form method="POST"> <!-- método post serve para mandar a informação oculta e o action e o nome da página que recebera os parametros -->
    <input type="email" name="email" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="ACESSAR">
    <a href="cadastrar.php">Ainda não é inscrito?<!--tem que criar o arquivo cadastrar.php--> <strong>Cadastre-se</strong></a>
    </div>
    <?php 
        // aqui e o final do projeto codar em ultimo lugar
        if(isset($_POST['email']))//isset verificar a existencia de um array ou variavel passado pelo método POST
    {
        $email=addslashes($_POST['email']);//addslashes serve para evitar um injeção de dados segurança contra harker
        $senha=addslashes($_POST['senha']);//addslashes serve para evitar um injeção de dados segurança contra harker
        // o código abaixo verificar se o formulário foi todo preenchido
        if(!empty($email)&&!empty($senha))
        {
            // sdepois de instaciar ele na linha 5 podemos acessar os metodos
            $u->conectar("projeto_login","localhost","root","");
            if($u->msgErro==""){
            if($u->logar($email,$senha)){
                header("location: AreaPrivada.php");// esse comando leva a pessoa a area privada
            }
            else{
                 ?>
                <div class="msg-erro"> Email e/ou senha estão incorretos!</div>
                <?php
            }
        }
        else{
             ?>
             <div class="msg-erro">
           <?php  echo "Erro:".$u->msgErro;?>
           </div>
            <?php
        }
        }else{
             ?>
            <div class="msg-erro">preencha todos os campos</div>
            <?php
        }
    }
    ?>
</form>
</body>
</html>