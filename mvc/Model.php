<?php 
// é o primeiro arquivo a ser criado
//este código tem objetivo de treinar através da repetição o uso a estrutura MVC
//o model e manupulação de dados, regras de negócio, etidades, camada de acesso a dados,classes php
class Model{
    public $string;

    public function __construct(){
        $this->string="ola mundo";
    }
    public function get_string(){
        return $this->string;
    }
    
    
    
}


?>