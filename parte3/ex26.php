<?php
// array associativo
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
echo "Informações sobre o parcelamento:\n";
echo "Taxa para pagamento à vista: " . ($parcelamento["avista"] * 100) . "%\n";
echo "Taxa para pagamento em 2x: " . ($parcelamento["2x"] * 100) . "%\n";
echo "Taxa para pagamento em 3x: " . ($parcelamento["3x"] * 100) . "%\n";
echo "Taxa para pagamento em 4x: " . ($parcelamento["4x"] * 100) . "%\n";

echo "\nInformações sobre o filme:\n";
echo "Nome do filme: " . $filmeCaztaz["nome"] . "\n";
echo "Duração do filme: " . $filmeCaztaz["duracao"] . "\n";
echo "Gênero do filme: " . $filmeCaztaz["genero"] . "\n";
echo "Faixa etária: " . $filmeCaztaz["faixa_etaria"] . "\n";

echo "\nPreços dos ingressos:\n";
echo "Preço do ingresso meia: R$ " . $precoIngresso["meia"] . "\n";
echo "Preço do ingresso inteira: R$ " . $precoIngresso["inteira"] . "\n";
?>
