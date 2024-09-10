<?php 
    require_once "Animal.php";
    class Peixe extends Animal{
        private $corEscama;

        public function locomover()
        {
            echo "Locomover peixe";
        }
        public function alimentar()
        {
            echo "Comendo Minhoca";
        }
        public function emitirSom()
        {
            echo "Glub!!GLUB";
        }
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($corEscama){
            $this->corEscama=$corEscama;
        }
        public function soltarBolha(){
            echo "Soltando bolha";
        }
    }


?>