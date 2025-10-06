<?php
// Função com Parâmetros por Referência

// Se você passar uma variável por referência (usando o &), qualquer alteração feita dentro da função afetará a variável original.
function incrementar(&$numero) {
    $numero++;
}

$valor = 5;
incrementar($valor);  // A variável $valor será modificada
echo $valor;  // Exibe 6
?>
