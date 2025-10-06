
<?php
// Usando com um código de status:

// Você também pode passar um código de status (um inteiro) para exit() ou die(), o que pode ser útil em scripts mais complexos, 
// especialmente quando você está executando processos via linha de comando ou ao interagir com outros sistemas.

echo "Antes de sair...";

// Interrompe a execução com um código de status
exit(1);  // Código de erro 1

echo "Isso não será exibido.";  // Não será exibido

// Diferença entre die() e exit():

// Não há diferença funcional entre die() e exit(). Ambos fazem a mesma coisa:

// exit() é o nome técnico da função.

// die() é um alias para exit(), e muitas vezes é usado quando você quer deixar claro que o script está sendo encerrado por causa de um erro ou de alguma falha.
?>