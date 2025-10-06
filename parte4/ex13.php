<?php
function ordenarFrutasDecrescente($frutas) {
    rsort($frutas);  // A função rsort() ordena o array em ordem decrescente
    return $frutas;
}

$frutas = ["banana", "maçã", "laranja", "manga", "kiwi"];
$frutasOrdenadas = ordenarFrutasDecrescente($frutas);

print_r($frutasOrdenadas);  // Exibe o array ordenado em ordem decrescente
?>
