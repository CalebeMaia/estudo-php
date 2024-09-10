<?php 
    class homeController extends Controller{
        public function index($valor_1)// padrao www.nome.com/ é obrigatório no home controller ter uma função index
        {
            //chama um model
            //==============
            //chama a view
            $this->carregarTemplate('home');
        }
    }


?>