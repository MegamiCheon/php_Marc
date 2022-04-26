<?php

// Entrada
// Processamento
// Saida

/* Soma:
Entrada

- Numero 1
- Numero 2

Processamento

- Pegar o numero 1 e adicionar o numero 2

Resultado

- A soma do numero 1 e do numero 2

Exemplo:

Somar 1 3 = 4
Somar 10 5 = 15
Somar 15623549853 6521478 = ?


Pratica

$list = [10, 6, 8];
print_r($list);
sort($list);
print "<br>";
print_r($list);

*/

/*
    Faça um programa, com uma função que necessite de tres argumentos, e que forneça a soma desses tres argumentos atraves da função.
    No Script tambem deve fornecer a media dos tres numeros por meio de uma segunda função;
*/

function somar($num1, $num2, $num3){
    $result = $num1 + $num2 + $num3;
    return $result;   
}

function div($num4 = 0, $num5 = 0, $num6 = 0){
    $med = ($num4 + $num5 + $num6)/3;
    return $med;
}

$plus = somar(10, 8, 9);
echo "Resultado: ".$plus;
echo "<br>";

$divmed = div(10, 8, 9);
echo "Média: ".$divmed;

// $x = somar(2,3, 10);
// $y = somar(5, 7);
// $w = somar($x, $y);
// echo "Total: ".$w;

?>