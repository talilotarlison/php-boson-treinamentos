<?php
// Completo: Criar, Acessar e Excluir um Cookie

// Verifica se o cookie "user" está definido
if(!isset($_COOKIE['user'])) {
    // Define o cookie se não estiver presente
    setcookie("user", "João", time() + 3600, "/");
    echo "Cookie foi criado. <br>";
} else {
    // Exibe o valor do cookie
    echo "O nome do usuário é: " . $_COOKIE['user'] . "<br>";
}

// Exclui o cookie após 5 segundos
sleep(5);
setcookie("user", "", time() - 3600, "/");
echo "Cookie foi excluído.";
?>
