<?php
// switch 
// O switch é utilizado quando há várias opções possíveis, e o valor de uma variável precisa ser comparado com diferentes opções. 
// É uma alternativa mais limpa e organizada do que várias condições if...elseif.

$dia = 3;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
