<?php
// Função com Parâmetros Opcionais
function saudacao($nome = "Visitante") {
    echo "Olá, $nome!";
}

saudacao();  // Exibe "Olá, Visitante!"
saudacao("Maria");  // Exibe "Olá, Maria!"
?>
