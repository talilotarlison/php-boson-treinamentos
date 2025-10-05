<?php

// Exemplo de recurso de arquivo
$arquivo = fopen("exemplo.txt", "r");
if ($arquivo) {
    echo "Arquivo aberto com sucesso!";
    fclose($arquivo);
} else {
    echo "Erro ao abrir o arquivo.";
}
