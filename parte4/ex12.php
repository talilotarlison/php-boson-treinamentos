<?php
function ordenarFrutas($frutas) {
    sort($frutas);  // A função sort() ordena o array em ordem crescente
    return $frutas;
}

$frutas = ["banana", "maçã", "laranja", "manga", "kiwi"];
$frutasOrdenadas = ordenarFrutas($frutas);

print_r($frutasOrdenadas);  // Exibe o array ordenado
?>
