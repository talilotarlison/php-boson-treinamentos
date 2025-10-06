<?php
// É possível também especificar um código de status HTTP junto com o redirecionamento. Por exemplo, para um redirecionamento temporário (status 302):
// Redireciona temporariamente para outra página
header("Location: pagina2.php", true, 302);
exit;
?>
