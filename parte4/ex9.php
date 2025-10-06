<?php
// Função com Tipo de Retorno Especificado (Type Hinting)

// Você pode especificar o tipo do valor que uma função deve retornar. No PHP 7 e versões superiores, você pode usar "type declarations" para isso.

function somarInteiros(int $a, int $b): int {
    return $a + $b;
}

echo somarInteiros(3, 7);  // Exibe 10
?>
