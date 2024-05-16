<?php 
    class Core{
        public function __construct()
        {
            $this->run();
        }
        public function run(){
                $parametros=array();
                if(isset($_GET['pag'])){
                    $url=htmlentities(addslashes($_GET['pag']));
                }
                if(!empty($url)&& $url!='/')// Existe metodo
                {
                    $url=explode('/',$url);
                    $controller=$url[0].'controller';
                    array_shift($url);
                    if(isset($url[0])&&!empty($url[0])){
                        $metodo =$url[0];
                        array_shift($url);
                    }else{
                         
                    }
                }
        }

    }

?>