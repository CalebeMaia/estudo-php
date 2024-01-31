<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

   //metodo 
    public function __construct()
     {
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
     
    }
    //metodo acessores
    public function getVolume(){
        return $this->volume;
    }
    public function setVolume($vol){
        $this->volume=$vol;
    }
    public function getLigado(){
        return $this->ligado;
    }
    public function setLigado($liga){
        $this->ligado=$liga;
    }
    public function getTocando(){
        return $this->tocando;
    }
    public function setTocando($toca){
        $this->tocando=$toca;
    }
    public function ligar()
    {
        $this->setLigado(true);
    }   
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function ligarMudo()
    {
        $this->setVolume(0);
    }

    public function desligarMudo()
    {
      
    }
    public function abrirMenu()
    {
        echo "<p>-----MENU-----</p>";
        echo "<br> esta ligado? ".($this->getLigado()?"sim":"não");
        echo "<br> esta ligado? ".($this->getTocando()?"sim":"não");
        echo "<br> volume :".($this->getVolume());
        for($i=0;$i<=$this->getVolume();$i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function maisVloume()
    {
        
    }
    public function menosVolume()
    {
        
    }
    public function play()
    {
        
    }
    public function pause()
    {
        
    }
    }
   


?>