<?php

// Redirecionamento com atraso (usando JavaScript)

// Embora o header() seja a forma mais eficaz, em alguns casos você pode querer fazer um redirecionamento com um pequeno atraso, por exemplo,
//  para mostrar uma mensagem antes de redirecionar.
// Redireciona após 5 segundos usando JavaScript
echo "<script>setTimeout(function(){ window.location.href = 'pagina2.php'; }, 5000);</script>";
?>
