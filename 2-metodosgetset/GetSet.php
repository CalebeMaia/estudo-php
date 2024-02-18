<?php 
    class Caneta{
      private $modelo;
      private $cor;
      private $ponta;
      private $tampada;

      public function __construct(){     //o metodo construtor serve para construir um obejto sempre com esses atributos e como se fosse uma forma
                                        // nos contrutores é comum colocar o mesmo nome da classe
        $this->cor="azul";
        $this->tampada=true;
        $this->ponta="0.7";
        $this->modelo="super caneta";


      }

      public function tampar(){

      }
  
      public function getModelo(){
        return $this->modelo;

      }
      public function setModelo($m){
        $this->modelo=$m;
      }
      public function getCor(){
        return $this->cor;
      }
      public function setCor($c){
        $this->cor=$c;
      }
      public function getPonta(){ 
        return $this->ponta;
      }
      public function setPonta($p){
        $this->ponta=$p;
      }
      public function getTampar(){
          return $this->tampada;
      }
      public function setTampada($t){
          $this->tampada=$t;
      }

    }


?>