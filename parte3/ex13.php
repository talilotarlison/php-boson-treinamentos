<?php
// 1. Pré-Incremento (++$variavel)

// No pré-incremento, o valor da variável é incrementado antes de ser usado na expressão.

// Operação: Primeiro incrementa, depois utiliza o valor da variável.

$numero = 5;
echo ++$numero;  // Saída: 6
// Primeiro incrementa $numero (agora é 6) e depois exibe o valor

// 2. Pós-Incremento ($variavel++)

// No pós-incremento, o valor da variável é usado na expressão antes de ser incrementado.

// Operação: Primeiro usa o valor atual da variável e depois incrementa.

$numero = 5;
echo $numero++;  // Saída: 5
// Primeiro exibe $numero (que é 5) e depois incrementa (agora $numero será 6)

// Diferença Entre Pré e Pós-Incremento:

// A principal diferença é quando o incremento ocorre em relação ao uso da variável.

// Pré-Incremento: O valor é incrementado antes de ser usado na expressão.

// Pós-Incremento: O valor é usado antes de ser incrementado.

$numero = 5;

echo "Pré-Incremento: " . ++$numero . "<br>";  // Incrementa primeiro, então exibe 6
echo "Pós-Incremento: " . $numero++ . "<br>";  // Exibe 6, depois incrementa para 7
echo "Valor final de \$numero: " . $numero;    // Exibe 7 (após o pós-incremento)

// Exemplos com Laços (for):

// Esses operadores também são comuns em laços. Vamos usar ambos em um exemplo de laço for.

for ($i = 0; $i < 5; ++$i) {
    echo "Pré-Incremento: " . $i . "<br>";
}
// Saída: 0, 1, 2, 3, 4 (incrementa antes de imprimir)

for ($i = 0; $i < 5; $i++) {
    echo "Pós-Incremento: " . $i . "<br>";
}
// Saída: 0, 1, 2, 3, 4 (imprime antes de incrementar)

// Resumo:

// ++$variavel (Pré-Incremento): A variável é incrementada antes de ser usada na expressão.

// $variavel++ (Pós-Incremento): A variável é usada antes de ser incrementada.