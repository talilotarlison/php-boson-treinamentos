<?php
// Validando se o usuário está logado
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Acesso negado. Você precisa estar logado.");
}

// Continuação do código se o usuário estiver logado
echo "Bem-vindo ao painel!";
?>
