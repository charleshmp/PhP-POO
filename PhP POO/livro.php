<?php
    class Livro{
         public $nome;
         public $capa;
         public $paginasT;
         public $paginaAtual;
         public $autor;

         public function __construct($nome, $capa, $paginasT, $paginaAtual, $autor) {
            $this->nome = ucwords(strtolower($nome));
            $this->capa = $capa;
            $this->paginasT = $paginasT;
            $this->paginaAtual= $paginaAtual;
            $this->autor = ucwords(strtolower($autor));
         }
         public function nome(){
            return $this->nome;
         }
         public function autor() {
            return $this->autor;
         }
         public function capa() {
            return $this->capa;
         }
         public function paginasTotal() {
            return $this->paginasTotal;
         }
         public function paginaAtual() {
            return $this->paginaAtual;
         }
         public function estaAcabanco() {
            if ($this->paginaAtual < ($this->paginasT/2)){
             return 'Esta no inicio ';
          } if ($this->paginaAtual == ($this->paginasT/2)) {
            return 'Esta no meio';
            }
            return 'Esta acabando !';
            }   
    }
    $livro1 = new Livro('Mundo Perdido','dura', 600, 3, 'nicolas');
    $livro2 = new Livro('como fazer uma faca','fina', 500, 100, 'pedro');

    
?>