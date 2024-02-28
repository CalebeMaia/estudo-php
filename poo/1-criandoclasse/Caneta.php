<?php 
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){
            if($this->tampada==true){
                echo "nao posso rabiscar pois estou tampada";
            }elseif($this->tampada==false){
                echo "ESCREVENDO";
            }
        }
        function tampar(){
            $this->tampada=true;

        }
        function destampar(){
            $this->tampada=false;

        }


    }



?>