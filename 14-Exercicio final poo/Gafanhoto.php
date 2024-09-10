<?php 
require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        private $login;
        private $toAssistido;

        public function __construct($nome,$idade,$sexo,$login){// esse contrutor e desta classe gafanhoto
            parent::__construct($nome,$idade,$sexo); // esse metodo chama o construtor da super Classe Pessoa
            $this->login=$login;
        }
        
        public function viuMaisUm(){
            $this->toAssistido++;
        }
        public function getLogin(){
            return $this->login;
        }
        public function getToAssistido(){
            return $this->toAssistido;
        }
        public function setLogin($login){
           return $this->login;
        }
        public function setToAssistido($toAssistido){
            $this->toAssistido=$toAssistido;
        }

    }

?>