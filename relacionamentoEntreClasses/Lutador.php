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
     $this->peso=$pe;
     $this->vitorias=$vi;
     $this->derrotas=$de;
     $this->empates=$em;
    }
    // métodos 
    public function apresentar(){
       echo "<p>-------------------</p>";
       echo "<p>CHEGOU A HORA! o lutado".$this->getNome();
       echo "veio diretamente de ".$this->getNacionalidade();
       echo "tem". $this->getIdade()."anos e pesa" . $this->getPeso()."kg";
       echo "<br>Ele tem". $this->getVitoria()+"vitorias";
       echo $this->getDerrota(). "Derrotas e " . $this->getEmpate(). "emaptes";;
    }
    public function status(){
        echo "<p>-------------------</p>";
        echo "<p>".$this->getNome()."é um peso".$this->getCategoria();
        echo "e ja ganhou".$this->getVitoria()."vezes";
        echo "Perdeu".$this->getVitoria()."vezes e";
        echo "Empatou".$this->getEmpate()."vezes !";
        

    }
    public function ganharLuta(){
        $this->setVitoria($this->getVitoria()+1);
    }
    public function perderLuta(){
        $this->setDerrota($this->getDerrota()+1);
    }
    public function empatarLuta(){
        $this->setEmpate($this->getEmpate()+1);
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
        $this->setCategoria()// não precisa passar o parametro
    }
    public function setPeso($pe){
        $this->peso=$pe;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria(){// não precisa colocar paramentro pois ele esta implementado no setPeso();
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
    public function getVitoria(){
        return $this->vitoria;
    }
    public function setVitoria($v){
        $this->vitoria=$v;
    }
    public function getDerrota(){
        return $this->derrota;
    }
    public function setDerrota($d){
        $this->derrota=$d;
    }
    public function getEmpate(){
        return $this->empate;
    }
    public function setEmpate($p){
        $this->vitoria=$p;
    }
}

?>