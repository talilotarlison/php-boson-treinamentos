<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

$pessoas = [
    new Pessoa("João", 25),
    new Pessoa("Maria", 30),
    new Pessoa("Pedro", 22),
    new Pessoa("Ana", 28)
];

foreach ($pessoas as $pessoa) {
    echo "Nome: " . $pessoa->nome . ", Idade: " . $pessoa->idade . "\n";
}
?>
