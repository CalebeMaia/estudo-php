<?php 
    abstract class Animal{//não implementa nada pois é uma caixa abstrata
        protected $peso;
        protected $idade;
        protected $membros;
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();
        // metodos
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso=$peso;
        }


    }

?>