<?php 
class Controller{
    public $dados;
    public function __construct()
    {
        $this->dados=array();
    }
    //Chamado por todos os CONTROLLERS
    public function carregarTemplate($nomeView, $dadosModel=array()){
        $this->dados=$dadosModel;
        require 'views/template.php';
    }
    //CHAMADO NO TEMPLATE
    public function carregarViewNoTemplate($nomeView,$dadosModel=array()){
        extract($dadosModel);
        require 'views/'.$nomeView.'.php';//dinamico
    }
}


?>