<?php
$nomes = ["Ana", "João", "Maria", "Carlos", "José"];

// Laço for para procurar "Carlos"
for ($i = 0; $i < count($nomes); $i++) {
    if ($nomes[$i] == "Carlos") {
        echo "Carlos encontrado na posição $i<br>";
        break;  // Sai do laço quando encontrar "Carlos"
    }
}
?>
