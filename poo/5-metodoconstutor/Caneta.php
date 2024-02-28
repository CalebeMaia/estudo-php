<?php 
class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($m,$c,$p){//metodo construtor
        $this->modelo=$m;
        $this->cor=$c;
        $this->ponta=$p;
        $this->tampar();
    
        }
        public function tampar(){
            $this->tampada=true;
        }
        
    }



?>