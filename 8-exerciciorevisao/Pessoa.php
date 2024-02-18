<?php 
    require_once "Livro.php";
    class Pessoa{
        private $pessoa;
        private $idade;
        private $sexo;
        // método]
        public function __construct($pe,$id,$sex)
        {
            $this->pessoa=$pe;
            $this->idade=$id;
            $this->sexo=$sex;
        }
        public function fazerAniver(){
            $this->idade++;
        }
        //metodo acessores e modificadores
        public function getPessoa(){
            return $this->pessoa;
        }
        public function setPessoa($pe){
            $this->pessoa=$pe;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($id){
            $this->idade=$id;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sex){
            $this->sexo=$sex;
        }

    }



?>