<?php
// Array associativo de 6 estados com suas respectivas populações (em milhões)
$estados = [
    "São Paulo" => 45.9,  // População de São Paulo
    "Minas Gerais" => 21.3,
    "Rio de Janeiro" => 17.2,
    "Bahia" => 15.1,
    "Paraná" => 11.4,
    "Ceará" => 9.0
];

// Exibindo o número total de estados no array usando count()
echo "Número total de estados: " . count($estados) . "\n";

// Ordenando o array com a função asort() para ordenar por valor (população)
asort($estados); // Ordena o array pelos valores (populações), mantendo as chaves

echo "\nEstados ordenados por população (em milhões):\n";

// Exibindo os estados após ordenação
foreach ($estados as $estado => $populacao) {
    echo "$estado: $populacao milhões\n";
}
?>
