<?php 
    class homeController extends Controller{
        public function index()// padrao www.nome.com/ 
        {
            //chama um model
            //==============
            //chama a view
            $this->carregarTemplate('home');
        }
    }


?>