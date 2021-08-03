<?php

$miVariable = 'Esta es mi primer variable';// con el simbolo $

$miNumero = 35; // int
$miDecimal = 30.4;// decimal
$miBoolean=true; // booleano son el true y el false
$miNulo=null;//tipo de dato nulo indica que la variable no tiene nada
$miVacio='';


echo $miVariable . '<br>'; // el br sirve para hacer un salto de linea 

var_dump($miVariable);// nos permite conocer la informacion de la variable
echo '<br>'; // para variables tipo numerico se debe colocar de esta forma
var_dump($miNumero);
echo '<br>';
var_dump($miDecimal);
echo '<br>';
var_dump($miBoolean);
echo '<br>';
var_dump($miNulo);
echo '<br>';
var_dump($miVacio);
echo '<br>';
echo "$miNumero  +  $miDecimal = ".($miNumero + $miDecimal);// operaciones matematicas (suma)
echo '<br>';
echo"$miNumero  -  $miDecimal = ". ($miNumero - $miDecimal);//resta
echo '<br>';
echo "$miNumero  *  $miDecimal = ". $miNumero * $miDecimal;//multiplicacion
echo '<br>';
echo "$miNumero  /  $miDecimal = ". $miNumero / $miDecimal;// division
?> <!-- el cerrar php solo es necesario si se va a trabajar html-->   