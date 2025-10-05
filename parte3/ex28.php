<?php

class dataBaseMock {
    public $parcelamentoTaxa;
    public $filmeCartaz;
    public $precoIngresso;
    function __construct($parcelamentoTaxa, $filmeCartaz,$precoIngresso) {
        $this->parcelamentoTaxa = $parcelamentoTaxa;
        $this->filmeCartaz =  $filmeCartaz;
        $this->precoIngresso =  $precoIngresso;
    }
}

// Estrutura para Parcelamento
$parcelamento = [
    "avista" => 0.08,  // Taxa de 8% para pagamento à vista
    "2x" => 0.15,     // Taxa de 15% para pagamento em 2 vezes
    "3x" => 0.20,     // Taxa de 20% para pagamento em 3 vezes
    "4x" => 0.25      // Taxa de 25% para pagamento em 4 vezes
];

// Estrutura para Filme
$filmeCaztaz = [
    "nome" => "Caztaz",           // Nome do filme
    "duracao" => "120 minutos",   // Duração do filme
    "genero" => "Ação",           // Gênero do filme
    "faixa_etaria" => "12 anos"   // Faixa etária recomendada
];

// Estrutura para Preço de Ingresso
$precoIngresso = [
    "meia" => 15.00,   // Preço do ingresso meia
    "inteira" => 30.00 // Preço do ingresso inteira
];

// Exibindo informações
$dataBase = new dataBaseMock($parcelamento,$filmeCaztaz,$precoIngresso );
print_r($dataBase->parcelamentoTaxa);
print_r($dataBase->parcelamentoTaxa['avista']) ;

?>