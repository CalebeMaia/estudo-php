<?php 
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;
        public final function pagarMensalidade(){// final não deixa sobrepor 
            echo "<p> pagando mendalidade do aluno $this->nome</p>";
        }
        public function getMatricula(){
            return $this->matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setMatricula($matricula){
            $this->matricula=$matricula;
        }
        public function setCurso($curso){
            $this->curso=$curso;
        }

    }

?>