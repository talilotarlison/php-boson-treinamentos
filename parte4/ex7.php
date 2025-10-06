<?php
// Função Anônima (Closure)

// Uma função anônima é uma função sem nome. Ela pode ser atribuída a uma variável e pode ser usada em locais onde funções normais são usadas.
$saudacao = function($nome) {
    echo "Olá, $nome!";
};

$saudacao("Carlos");  // Exibe "Olá, Carlos!"
?>
