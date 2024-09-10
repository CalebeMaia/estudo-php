<?php 
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        //metodo construtor
        public function __construct()
        {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

    //metodos
        public function abrirConta($abrir){
            $this->setTipo($abrir);
            $this->setStatus(true);
            if($abrir=="cc"){
                $this->setSaldo(50);
            }elseif($abrir=="cp"){
                $this->setSaldo(150);
            }
        }
        public function fecharConta(){
            if($this->getSaldo()>0){
                echo "não é possível fechar conta pois tem grana {$this->getSaldo()}";
            }elseif($this->getSaldo()==0){
                echo "conta encerrada com sucesso";
            }elseif($this->getSaldo()<0){
                echo "conta em debito não é possível fechar";
            }
        }
        public function depositar($deposita){
            if($this->getStatus(true)){
                $this->setSaldo($this->getSaldo()+$deposita);
            }else {
                echo "conta fechada";
            }
        }
        public function sacar($sacar){
            if($this->getStatus(true)){
               if($this->getSaldo()>=$sacar){
              $this->setSaldo($this->getSaldo()-$sacar);
               }elseif($this->getSaldo()<=$sacar){
                echo "saldo insuficiente";
               }
            }
        }
        public function pagarMensal(){
          if($this->getTipo()=="cc"){
            $v=12;
          }elseif($this->getTipo()=="cp"){
            $v=20;
          }
          if($this->getStatus()){
            $this->setSaldo($this->getSaldo()-$v);
          }else{
            echo "nao foi possivel erro";
          }
        }
        
        //metodos get e set
        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($nc){
            $this->numConta=$nc;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo=$t;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono=$d;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo=$s;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($st){
            $this->status=$st;
        }






    }
?>