<?php 
    require_once "Animal.php";
    class Ave extends Animal{
        private $corPena;
        public function locomover()
        {
            echo "<p>Voando ave</p>";
        }
    public function alimentar()
    {
        echo "<p>Comendo milho</p>";
    }
    public function emitirSom()
    {
        echo "<p>fazendo som de ave</p>";
    }
    public function fazerNinho(){
        echo "<p> Construindo um ninho </p>";
    }
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena(){
        $this->corPena;
    }
    }


?>