<?php 
    class Pessoa{
        private $pdo;// 2 precisa criar uma variavel para poder instaciar o banco 
         // conexão com banco de dados e ser enchergada por toda classe
        // 1 parte ser construida 
         public function __construct($dbname, $host, $user, $senha)
        {
            try {// o try cat serve para caso der algum problema podemos identificar qual o erro
                $this->pdo= new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);// 3 instanciar 
            } catch (PDOException $e) {
               echo "Erro ao conectar o banco de dados:".$e->getMessage();
               exit();
            }catch (Exception $e){
                echo "Erro generico:".$e->getMessage();
                exit();
            }
           

        }
        //função para buscar dados e colocar no canto direito
        public function buscarDados(){
            $res=array();// 7 essa variavel é criada para caso o banco esteja vazio não dará erro
            $cmd=$this->pdo->query("SELECT * FROM pessoa ORDER BY nome");// 4 faz a chamada na tabela pessoa e ordena por nome
            $res=$cmd->fetchAll(PDO::FETCH_ASSOC);//5 criei uma variavel res para ela receber um array, o método fetchAll transforma os dados em uma matriz
            return $res;//6 retornar todo o resultado na variavel res
        }
        //=========função cadastrar pessoa no BD
        public function cadastrarPessoa($nome,$telefone,$email){ //13
            //antes de cadastrar verificar se ja tem o email cadastrado
            $cmd=$this->pdo->prepare("SELECT id FROM pessoa WHERE email=:e");
            $cmd->bindValue(":e",$email);
            $cmd->execute();
            if($cmd->rowCount()>0){//verifica se o email existe no banco
                return false;
            }else{// aqui ele não foi encontrado então posso cadastrar
                $cmd=$this->pdo->prepare("INSERT INTO pessoa(nome,telefone,email)VALUES(:n,:t,:e)");
                $cmd->bindValue(":n",$nome);
                $cmd->bindValue(":t",$telefone);
                $cmd->bindValue(":e",$email);
                $cmd->execute();
                return true;
            }
        }
        //16 
    public function excluirPessoa($id){// precisamos pegar o id 
        $cmd=$this->pdo->prepare("DELETE FROM pessoa WHERE id=:id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();

    }
    }


?>