<?php 
//uma interface só tem metodos
    interface Controlador{
        public  function ligar();
        public  function desligar();
        public  function abrirMenu();
        public  function fecharMenu();
        public  function maisVloume();
        public  function menosVolume();
        public  function ligarMudo();
        public  function desligarMudo();
        public  function play();
        public function pause();

    }

?>