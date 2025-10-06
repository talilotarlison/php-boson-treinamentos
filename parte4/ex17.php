<?php
// As funções die() e exit() em PHP têm o mesmo comportamento e podem ser usadas de forma intercambiável.
//  Ambas são usadas para terminar a execução de um script. Elas são comumente utilizadas quando queremos interromper 
// a execução de um script de forma controlada, seja por erro, condição específica ou qualquer outra necessidade.
exit();   // Sem mensagem
die();    // Sem mensagem

exit("Mensagem de erro");  // Com mensagem
die("Mensagem de erro");   // Com mensagem

?>