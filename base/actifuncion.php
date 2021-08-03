<?php

function suma($num1, $num2)
{
    return $num1 + $num2;
}

function resta($num1, $num2)
{
    return  $num1 - $num2;
}

function multiplicacion($num1, $num2)
{
    return $num1 * $num2;
}
function division($num1, $num2)
{
    return $num1 / $num2;
}
/*function calculadora2($num1, $num2, $oper)
{
    $resp = '';
    if ($oper == '+') {
        $resp = suma($num1, $num2);
    }
    if ($oper == '-') {
        $resp = resta($num1, $num2);
    }
    if ($oper == '*') {
        $resp = multiplicacion($num1, $num2);
    }
    if ($oper == '/') {
        $resp = division($num1, $num2);
    }
    return "$num1 $oper $num2 = $resp";
}
//echo calculadora2(10, 5, '+');

/*echo 'El resultado de la suma es: ' . suma(3, 3);
echo '<br>';
echo 'El resultado de la resta es: ' . resta(3, 3);
echo '<br>';
echo 'El resultado de la multiplicacion es: ' . multiplicacion(3, 3);
echo '<br>';
echo 'El resultado de la division es: ' . division(3, 3);
echo '<br>';*/
