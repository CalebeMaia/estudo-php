<?php 
    require_once 'Mamifero.php';
    class Cachorro extends Mamifero{
        public function locomover()
        {
            echo "<p>eu sou um cachorro entao estou correndo rapido</p>";
        }
        public function emitirSom()
    {
        echo "<p> AU!AU!AU!AU!AU!AU! </p>";
    }
        
    }


?>