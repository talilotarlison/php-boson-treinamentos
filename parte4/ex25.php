<?php
// Laço for de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    if ($i == 7) {
        continue;  // Pula a execução quando $i for igual a 7
    }
    echo "Número: $i<br>";
}
// Explicação: Aqui, quando o valor de $i for igual a 7, o continue faz com que o código abaixo do continue seja pulado, e o laço segue para a próxima iteração.

// Resumo:

// break: Interrompe completamente o laço, saindo da execução.

// continue: Pula a execução da iteração atual e vai para a próxima iteração do laço.
?>
