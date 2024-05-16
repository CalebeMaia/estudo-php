<?php 
//1-aqui vou desenhar a url
    class Core{
        public function __construct()
        {
            $this->run();
        }
        public function run(){
                $parametros=array();
                if(isset($_GET['pag'])){// pega a informação do VIEWS/.htaccess onde tem get
                    $url=htmlentities(addslashes($_GET['pag']));//guarda a url na variavel $url
                }
                if(!empty($url)&& $url!='/')// Se não está vazio
                {
                    $url=explode('/',$url);// o explode e um delimitador quebra a url
                    $controller=$url[0].'Controller';//noticia
                    array_shift($url);// tira o array na posição zero
                    if(isset($url[0])&&!empty($url[0])){
                        $metodo =$url[0];
                        array_shift($url);
                    }else// enviou somente classe
                    {
                         $metodo='index';
                    }
                    if(count($url)>0){
                        $parametros=$url;
                    }else //ww.site.com
                    {
                        $controller='homeController';
                        $metodo='index';
                    }
                    $caminho='exemplo_1/Controllers/'.$controller.'.php';
                    if(!file_exists($caminho)&&!method_exists($controller,$metodo)){
                        $controller='homeController';
                        $metodo='index';
                    }
                    $c=new $controller;
                    call_user_func_array(array($c,$metodo), $parametros)
                }
        }

    }

?>