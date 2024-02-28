<?php 
    require_once "Animal.php";
   class Mamifero extends Animal{
      private $corPelo;

    public function alimentar()
    {
        echo "<p> Mamando</p>";
    }
    public function emitirSom()
    {
        echo "<p> Som Mamifero </p>";
    }
    public function locomover()
    {
        echo "<p> Correndo mamifero </p>";
    }
    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($corPelo){
        $this->corPelo=$corPelo;
    }

   }

?>