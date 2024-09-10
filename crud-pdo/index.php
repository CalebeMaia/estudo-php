<?php // 8 abrir no topo
    require_once 'Pessoa.php';
    $p=new Pessoa("crudpdo","localhost","root","");// depois de instaciar, vamos abrir um tag php após a sessão direita 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php // 14 abrir a tag php aqui
        if(isset($_POST['nome'])){// esse if server para verificar se foi clicado no botao cadastrar
            $nome =addslashes($_POST['nome']); //não podemos pegar a informação e jogar direto na variavel então vamos jogar da função addslashes: essa função evita vir códigos maliciosos na requisição
            $telefone=addslashes($_POST['telefone']);
            $email =addslashes($_POST['email']);
            if(!empty($nome) &&!empty($telefone)&&!empty($email)){ //15 vamos verificar se foram preenchidos todos os campos, o empty significa se nao está vazio
               if (!$p->cadastrarPessoa($nome,$telefone,$email)){
                echo "email já cadastrado";
               }
            }else{
                echo "Preencha todos os campos";
            }
        }
    
    ?>
    <section id="esquerda">
        <form method="POST">
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Cadastrar">
        </form>
    </section>

    <section id="direita">
    <table>
            <tr id="titulo">
            <td>Nome</td>
            <td>Telefone</td>
            <td colspan="2">email</td>
            </tr>
        <?php 
            $dados=$p->buscarDados();//9 toda a informação que veio do BD esta nesta variavel dados
            if(count($dados)>0){// 10 preciso ver se essa variavel não é vazia
                for ($i=0; $i < count($dados) ; $i++) { //11 depois de criar um for criar um forech
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v) {
                        if($k!="id"){//12 esse if serve para pular o id do cadastro no banco
                            echo "<td>".$v."</td>";
                        }
                       
                    }
                    ?>
                    <td><a href="">Editar</a>
                <a href="index.php?id=<?php
                echo $dados[$i]['id'];?>">Excluir</a>   </td>
                    
                    <?php
                }  
            }else{// o banco está vazio
                echo "Ainda não há pessoa cadastrada";
            }
        
        ?>
        
            
        </table>
    </section>
</body>
</html>

<?php 
//17 vamos jogar a função de excluir aqui em baixo
if(isset($_GET['id'])){
    $id_pessoa= addslashes($_GET['id']);
    $p->excluirPessoa($id_pessoa);
    //após excluir vamos atualizar a pagina
    header("location:index.php");
}
?>