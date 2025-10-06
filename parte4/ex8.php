<?php

// Função Recursiva
// Funções recursivas são aquelas que chamam a si mesmas. Elas são frequentemente usadas para resolver problemas que podem ser decompostos em subproblemas semelhantes.
function fatorial($n) {
    if ($n == 0) {
        return 1;  // Caso base
    } else {
        return $n * fatorial($n - 1);  // Chamada recursiva
    }
}

echo fatorial(5);  // Exibe 120 (5! = 5*4*3*2*1)
?>
