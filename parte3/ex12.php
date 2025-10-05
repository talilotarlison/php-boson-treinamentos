<?php
// Passagem por Referência em Funções com Múltiplos Parâmetros
function multiplicar(&$a, &$b) {
    $a *= 2;
    $b *= 2;
}

$x = 3;
$y = 4;
multiplicar($x, $y);

echo "x: $x, y: $y";  // Saída: x: 6, y: 8
?>
