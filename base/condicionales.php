<?php

$x = 10;
$y = '10';

if ($x == $y) { // si x es igual a y
    echo 'son iguales';
}
echo '<br>';

if ($x === $y) { // identicos
    echo 'son identicos';
} else {
    echo 'No son identicos';
}
echo '<br>';
if ($x != $y) { // diferente
    echo 'Si son diferentes';
}
echo '<br>';
if ($x !== $y) { // no son identicos
    echo 'Si son diferentes de identicos';
}
echo '<br>';
if ($x > $y) { // x es mayor a y
    echo "$x es mayor que $y";
} else if ($x < $y) {
    echo "$x es menor que $y";
} else if ($x == $y) {
    echo "$x es igual que $y";
} else {
    echo "Ninguna de las anteriores";
}
echo '<br>';
if (($x == $y) && ($x > 0)) {
    echo "$x es igual a $y y $x mayor a 0";
}
echo '<br>';
if (($x == $y) || ($x === $y)) {
    echo "$x es igual a $y o $x es identico a $y";
}
echo '<br>';

switch ($x) {// usa la igualdad para trabajar
    case 10:
        echo ' es un 10';
        break;
    case '20':
        echo 'es un 20';
        break;
    default:
        echo 'Nada';
        break;
    }

