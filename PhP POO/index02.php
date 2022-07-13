<?php
class Pessoa
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade) 
    {
      $this->nome = ucwords(strtolower($nome));
      $this->idade = $idade;      
    }
    public function eMaior() {
        if ($this->idade >= 18) 
        return "É maior";    
    return 'Não é';
    }
    public function dizerNome() {
        return $this->nome;
    }
}

$primeiro = new Pessoa("Filipe", 30);
$segundo = new Pessoa("Charles", 36);
$terceiro = new Pessoa("Ana", 15);


echo ' O ' . $primeiro->dizerNome() . ' ' . $primeiro->eMaior();
echo ' O ' . $terceiro->dizerNome() . ' ' . $terceiro->eMaior();
?>
