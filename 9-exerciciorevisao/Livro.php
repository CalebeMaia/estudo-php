<?php 
    require_once "Publicacao.php";
    require_once "Pessoa.php";
    class Livro implements Publicacao{
       private $titulo;
       private $autor;
       private $totPaginas;
       private $pagAtual;
       private $aberto;
       private $leitor; 
    //métodos
    public function __construct($ti,$aut,$totP,$le)
    {
        $this->titulo=$ti;
        $this->autor=$aut;
        $this->totPaginas=$totP;
       $this->pagAtual=0;
       $this->aberto=false;
        $this->leitor=$le;
    }
    public function detalhes(){
        echo "<hr> Livro ".$this->titulo."escrito por " .$this->autor;
        echo "<br> Páginas ".$this->totPaginas . " atual " . $this->pagAtual;
        echo "<br> sendo lido por ".$this->leitor->getPessoa();
    }
    //metodos acessores e modificadores

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($ti){
        $this->titulo=$ti;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($aut){
        $this->autor=$aut;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($totP){
        $this->totPaginas=$totP;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pagA){
        $this->pagAtual=$pagA;
    } 
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($abe){
        $this->aberto=$abe;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($le){
        $this->leitor=$le;
    }
    public function abrir()
    {
        $this->aberto=true;
    }
    public function fechar(){
        $this->aberto=false;
    }
    public function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
            
        }else{
            $this->pagAtual=$p;
        }
    }
    
    public function avancarPag()
    {
        $this->pagAtual++;
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }

    }


?>