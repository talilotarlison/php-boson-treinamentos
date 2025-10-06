<?php
// array simples
$estados = array('SP', 'RJ', 'PI','MA');
print_r($estados);

// excluir do array
unset($estados[1]);
print_r($estados);

// excluir tudo
unset($estados);
print_r($estados);

// array simples

$nomes = array();
$nomes[0] = 'joao';
$nomes[1] = 'maira';
$nomes[3] = 'kaio';
print_r($nomes[3]);
print_r($nomes);

?>