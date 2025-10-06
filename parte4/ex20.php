<?php
echo "Verificando algo...";

// Se uma condição falhar, interrompe o script com uma mensagem
if (!file_exists("algum_arquivo.txt")) {
    die("Erro: Arquivo não encontrado.");
}

echo "Isso não será exibido.";  // Não será exibido
?>
