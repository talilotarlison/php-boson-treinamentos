<?php

//  Estrutura if com operadores lógicos

// Você pode usar operadores lógicos como && (E) e || (OU) para combinar várias condições dentro do if.

$idade = 20;
$possuiCarteira = true;

if ($idade >= 18 && $possuiCarteira) {
    echo "Você pode dirigir.";
} else {
    echo "Você não pode dirigir.";
}
?>
