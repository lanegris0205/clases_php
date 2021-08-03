<?php
ini_set('display_errors', 1);// permite mostrar los errores en el localhost
error_reporting(E_ALL);


require_once('actifuncion.php'); // forma de incluir otro archivo este es obligatorio, solo una vez
$num1 = $_GET['nume1'] ?? 0;
$num2 = $_GET['nume2'] ?? 0;
$oper = $_GET['oper'] ?? 0;
/*var_dump($num1);
var_dump($oper);*/

function calculadora2(int $nume1, int $nume2, string $oper) // forma de llamar las funciones con if
{
    $resp = ''; // se crea una variable respuesta
    if ($oper == '+') {
        $resp = suma($nume1, $nume2);
    }
    if ($oper == '-') {
        $resp = resta($nume1, $nume2);
    }
    if ($oper == '*') {
        $resp = multiplicacion($nume1, $nume2);
    }
    if ($oper == '/') {
        $resp = division($nume1, $nume2);
    }
    return "$nume1 $oper $nume2 = $resp"; // se devuelve el mensaje
}
echo calculadora2($num1, $num2, $oper);// el echo debe estar por fuera de la funcion
