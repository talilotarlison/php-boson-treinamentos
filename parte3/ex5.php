<?php

class Carro {
    public $modelo;
    public $cor;

    function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    function mostrarDetalhes() {
        echo "Modelo: " . $this->modelo . ", Cor: " . $this->cor;
    }
}

$meuCarro = new Carro("Fusca", "azul");
$meuCarro->mostrarDetalhes();  // Saída: Modelo: Fusca, Cor: azul
