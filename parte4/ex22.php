
<?php

// A instrução break é usada para interromper o laço imediatamente. Quando o PHP encontra o break, ele sai do laço, independentemente de ainda haver iterações restantes.
// Laço for de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    // Se encontrar o número 5, interrompe o laço
    if ($i == 5) {
        echo "Número 5 encontrado, saindo do laço.<br>";
        break;  // Interrompe o laço
    }
    echo "Número: $i<br>";
}
?>
