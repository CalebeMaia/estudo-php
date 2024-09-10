<?php 
require_once "Animal.php";
    class Reptil extends Animal{
        private $corEscama;
        public function emitirSom(){
            echo "<p> Som de Reptil </p>";
        }
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorCama($corEscama){
            $this->corEscama=$corEscama;
        }
        public function locomover(){
            echo "<p> Rastejando reptil </p>" ;
        }
        public function alimentar(){
            echo "<p> Comendo Vegetais </p>";
        }
       

    }


?>