<?php

$numRequisitaramFatorial = array();
$numPrimos = array();
$numPerf = array();

//1-a) uma função para calcular o fatorial usando while
function fatorial($_num)
{
    $fat = 1;
    $cont = 1;

    while ($cont <= $_num) {
        $fat *= $cont;
        $cont++;
    }
    echo "<p>O Resultado fatorial de $_num : $fat</p>";

    return $_num;
}

array_push($numRequisitaramFatorial, fatorial(5));
array_push($numRequisitaramFatorial, fatorial(3));
array_push($numRequisitaramFatorial, fatorial(10));


//1-b) uma função para retornar se um numero é primo ou composto usando do...while
function numPrimoComposto($num)
{
    $ePrimo = true;
    $cont = 2;
    do {

        if ($num == 2) break;

        if ($num % $cont == 0) {
            $ePrimo = false;
        }

        $cont++;
    } while ($cont < $num);

    echo "<b>Número $num</b>";

    echo $ePrimo ? "<p>é primo</p>" : "<p>é composto</p>";

    return $ePrimo;
}

numPrimoComposto(2) ? array_push($numPrimos, 2) : null;
numPrimoComposto(5) ? array_push($numPrimos, 5) : null;
numPrimoComposto(10) ? array_push($numPrimos, 10) : null;
numPrimoComposto(11) ? array_push($numPrimos, 11) : null;


//1-c)  uma função para retornar se um numero é perfeito
function eNumPerf($num)
{
    $soma = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }

    $ePerfeito = $soma == $num;

    echo $ePerfeito == $num ? "<p> $num é um Número Perfeito :D </p>" : "<p> $num não é um Número Perfeito :( </p>";
    return $ePerfeito;
}

eNumPerf(6) ? array_push($numPerf, 6) : null;
eNumPerf(8) ? array_push($numPerf, 8) : null;

echo "<p>Fatorial: </p>";
print_r($numRequisitaramFatorial);

echo "<p>São Números Primos: </p>";
print_r($numPrimos);

echo "<p>São Números Perfeitos: </p>";
print_r($numPerf);