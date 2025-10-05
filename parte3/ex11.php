<?php
// Passagem por Referência com Funções Recursivas
function somarArray(&$arr, $index = 0, $soma = 0) {
    if ($index < count($arr)) {
        $soma += $arr[$index];
        somarArray($arr, $index + 1, $soma);
    } else {
        echo "A soma é: $soma\n";
    }
}

$valores = [1, 2, 3, 4, 5];
somarArray($valores);  // Saída: A soma é: 15
?>
