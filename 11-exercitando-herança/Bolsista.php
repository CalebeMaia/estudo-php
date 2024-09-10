<?php 
    class Bolsista extends Aluno{
        private $bolsa;
        public function renovarBolsa(){
            "<p> Bolsa renovada</p>";
        }
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa=$bolsa;
        }
        //public function pagarMensalidade()
       // {
            //echo "pagando mensalidade";// não deixa pagar mensalidade pois é bolsista
        //}

    }

?>