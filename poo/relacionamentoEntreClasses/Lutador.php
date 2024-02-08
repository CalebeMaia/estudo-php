<?php 
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade,$altura;
        private $peso;
        private $categoria;
        private $vitorias,$derrotas,$empates;

    // método contrutor
    public function __construct($no,$na,$id,$al,$vi,$de,$em,$pe)
    {
     $this->nome=$no;
     $this->nacionalidade=$na;
     $this->idade=$id;
     $this->altura=$al;
     $this->setPeso($pe);
     $this->vitorias=$vi;
     $this->derrotas=$de;
     $this->empates=$em;
    }
    // métodos 
    public function apresentar(){
       echo "<p>-------------------</p>";
       echo "<p> CHEGOU A HORA! o lutador </p> " .$this->getNome();
       echo " veio diretamente de ". $this->getNacionalidade();
       echo " tem ". $this->getIdade()." anos e pesa " . $this->getPeso()." kg ";
       echo "<br> Ele tem ". $this->getVitorias(). " vitorias ";
       echo $this->getDerrotas(). " Derrotas e " . $this->getEmpates(). " emaptes ";;
    }
    public function status(){
        echo "<p>-------------------</p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo " e ja ganhou ".$this->getVitorias()." vezes";
        echo " Perdeu ".$this->getDerrotas()." vezes e";
        echo " Empatou ".$this->getEmpates()." vezes !";
        

    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    // metodos acessores
    public function getNome(){
        return $this->nome;
    }
    public function setNome($no){
        $this->nome=$no;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade=$na;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade=$id;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($al){
        $this->altura=$al;
    }
    public function getPeso(){
        return $this->peso;
       
    }
    public function setPeso($pe){
        $this->peso=$pe;
        $this->setCategoria();// não precisa passar o parametro
    }
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){// não precisa colocar paramentro pois ele esta implementado no setPeso();
        if($this->peso<52.2){
            $this->categoria="Inválido";
        }elseif($this->peso<=70.3){
            $this->categoria="Leve";
        }elseif($this->peso<=83.9){
            $this->categoria="Medio";
        }elseif($this->peso<=120.2){
            $this->categoria="pesado";
        }else{
            $this->categoria="invalido";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($v){
        $this->vitorias=$v;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($de){
        $this->derrotas=$de;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($em){
        $this->empates=$em;
    }
}

?>