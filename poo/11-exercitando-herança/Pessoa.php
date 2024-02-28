'<?php 
    abstract class Pessoa{ //nâo pode ser instaciada pois e abstrata
       protected $nome;
       protected $idade;
       protected $sexo;
       
       public final function fazerAnive(){
            $this->idade ++;
       }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setNome($nome){
         $this->nome=$nome;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }


    }


?>'