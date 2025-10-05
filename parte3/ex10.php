<?php

// Passagem por Referência em Arrays e Objetos
// Arrays e objetos, por padrão, são passados por referência em PHP, o que significa que qualquer alteração feita dentro de uma função afetará o array ou objeto original.
// Porém, ao passar um array ou objeto explicitamente por valor, você pode criar uma cópia.

function alterarArray(&$arr) {
    $arr[] = "Novo valor";  // Adiciona um novo valor ao array original
}

$meuArray = ["A", "B", "C"];
alterarArray($meuArray);

print_r($meuArray);  // Saída: Array ( [0] => A [1] => B [2] => C [3] => Novo valor )
?>
