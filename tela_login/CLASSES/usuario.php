<?php 
// esse é o terceiro arquivo a ser criado
    class Usuario{
        private $pdo;// precisa instanciar a variavel pdo
        public $msgErro=""; //deixar ela vazia 
        public function conectar($nome,$host,$usuario,$senha){// vamos fazer a conexão usando PDO
            global $pdo; // essa variavel chama a de cima private linha4 $pdo
            try {// o try serve para fazer o tratamento do erro 
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);//$nome,$host,$usuario,$senha tem que passar esses paramentros
            } catch (PDOException $e) {// caso de algum erro tratar cai nessa parte
                $msgErro =$e->getMessage();
            }
           

        }
        public function cadastrar($nome,$telefone,$email,$senha){// esse parametros desta linha está chamando os nomes passado no form do HTML{
            global $pdo; // essa variavel chama a de cima private linha4 $pdo
            //o comando abaixo verifica se ja existe o email cadastrado
            $sql=$pdo->prepare("SELECT id_usuario FROM usuarios WHERE email=:e"); //aqui primeiro criou uma variavel $sql e chamou o metodo prepare, O prepare serve para chamar a tabela do banco, dentro do prepare tem a chamada do banco

            // na chamada do metodo prepare onde tem email=:e o é sera um apelido dado para chamar o email digitado
            $sql->bindValue(":e",$email);// bindValue esse comando pega o email digitado
            $sql->execute();
            if($sql->rowCount()>0)//rowCount conta as linhas que vieram do Banco
            {
                return false;//caso caia aqui ja esta cadastrado
            }else{
                //caso não, Cadastrar
                $sql=$pdo->prepare("INSERT INTO usuarios(nome,telefone,email,senha)
                VALUES(:n, :t, :e,:s)");// pega as coluna do banco de dados usuarios
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":t",$telefone);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",md5($senha));// o md5 embaralha a senha no BD
                $sql->execute();
                return true; // se executar aqui ta tudo ok
            }
            


        }
        public function logar($email,$senha){
            global $pdo; // essa variavel chama a de cima private linha4 $pdo
            $sql=$pdo->prepare("SELECT id_usuario FROM usuarios WHERE email=:e AND senha=:s");// faz a checagem no banco para logar
            $sql->bindValue(":e",$email);//esta referenciando a função logar
            $sql->bindValue(":s",md5($senha));//esta referenciando a função logar, o md5 serve para embaralha a senha
            $sql->execute();
            if($sql->rowCount()>0)
            {
                //entra no sistema
                $dado=$sql->fetch();//pega a informação que veio do banco e transforma em um array função fatch
                session_start();
                $_SESSION['id_usuario']=$dado['id_usuario'];
                return true;// logando com sucesso
            }
            else
            {
                return false;// não foi possível logar
            }
        }

    }

?>