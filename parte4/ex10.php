<?php
// Funções Variadic (Funções com número variável de argumentos)

// As funções variádicas permitem que você passe um número variável de argumentos para uma função. No PHP, isso é feito usando ... antes do parâmetro.
function somarTudo(...$numeros) {
    return array_sum($numeros);  // Soma todos os valores passados
}

echo somarTudo(1, 2, 3, 4);  // Exibe 10
?>
