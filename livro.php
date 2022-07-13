<?php
    class Livro{
         private $nome;
         private $capa;
         private $paginasTotal;
         private $paginaAtual;
         private $autor;

         public function __construct($nome, $capa, $paginasTotal, $paginaAtual, $autor) {
            $this->nome = ucwords(strtolower($nome));
            $this->capa = $capa;
            $this->paginasTotal = $paginasTotal;
            $this->paginaAtual= $paginaAtual;
            $this->autor = ucwords(strtolower($autor));
         }
         public function getNome(){
            return $this->nome;
         }
         public function getAutor() {
            return $this->autor;
         }
         public function getCapa() {
            return $this->capa;
         }
         public function getPaginasTotal() {
            return $this->paginasTotal;
         }
         public function getPaginaAtual() {
            return $this->paginaAtual;
         }
         public function proximaPagina() {
            if($this->paginasTotal == $this->paginaAtual) return;
            $this->paginaAtual += 1;
         }
         public function voltarPagina() {
            if($this->paginasAtual == 1) return;
            $this->paginaAtual -= 1;
         }
         
         

    }
    $livro1 = new Livro('Mundo Perdido','dura', 600, 3, 'nicolas');
    $livro2 = new Livro('como fazer uma faca','fina', 500, 100, 'pedro');

    
?>