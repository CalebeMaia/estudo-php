<?php
//Faz a ligação entre model e a view
require_once "Model.php";
require_once "View.php";
    class Controller{
      public function index(){
        $model=new Model();
        $view = new View();
        $string = $model->get_string();
        $view->render($string);
      }  


    }

?>