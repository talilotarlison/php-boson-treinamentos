<?php
// Sintaxe para Passagem por Referência
function adicionarValor(&$numero) {
    $numero += 10;  // Aumenta o valor da variável original em 10
}

$valor = 5;
echo "Antes da função: $valor\n";  // Saída: Antes da função: 5

adicionarValor($valor);

echo "Depois da função: $valor\n";  // Saída: Depois da função: 15
?>
