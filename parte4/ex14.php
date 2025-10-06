<?php
// Criando um Cookie

// Você pode definir um cookie usando a função setcookie(). Este método envia um cookie para o navegador do usuário.
// Define um cookie com o nome "user" e o valor "João"
setcookie("user", "João", time() + 3600, "/"); // O cookie expirará em 1 hora (3600 segundos)

// Redireciona para a mesma página para verificar o cookie após a definição
header("Location: " . $_SERVER['PHP_SELF']);
exit();

// Parâmetros do setcookie():

// name: O nome do cookie.

// value: O valor do cookie.

// expires: A data de expiração do cookie. Você pode usar time() + 3600 para definir 1 hora a partir do momento em que o cookie é criado.

// path: O caminho onde o cookie estará disponível. O valor / significa que o cookie estará disponível em todo o site.

// domain: O domínio onde o cookie será válido (opcional).

// secure: Se o cookie deve ser transmitido apenas via HTTPS (opcional).

// httponly: Se o cookie deve ser acessível apenas pelo protocolo HTTP (opcional).

// 2. Acessando o Cookie

// Após definir o cookie, você pode acessar o valor dele usando a superglobal $_COOKIE:

if(isset($_COOKIE['user'])) {
    echo "O nome do usuário é: " . $_COOKIE['user'];
} else {
    echo "Cookie não encontrado ou expirado!";

}

// 3. Excluindo um Cookie

// Se você quiser excluir um cookie, basta definir o tempo de expiração para um valor no passado.


// Exclui o cookie "user" definindo a expiração para 1 hora atrás
setcookie("user", "", time() - 3600, "/");


?>
