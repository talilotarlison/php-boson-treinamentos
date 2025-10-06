<?php
// A instrução continue é usada para pular a iteração atual e continuar para a próxima iteração do laço, sem executar o código restante dentro da iteração.
// // Laço for de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;  // Se o número for ímpar, pula a iteração
    }
    echo "Número par: $i<br>";
}
?>
