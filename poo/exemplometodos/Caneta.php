<?php 
   class Caneta{
    public $modelo;
    private $ponta;
    public $tampada;

    public function __construct()
    {
        $this->modelo="fabecastel";
        $this->ponta=0.7;
        $this->tampada=true;

    }
    
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo=$m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
    public function getTampada(){
        return $this->tampada;
         }
    public function setTampada($t){
        $this->tampada=$t;
    }

   } 

?>