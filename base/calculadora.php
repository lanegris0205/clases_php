<?php
require_once('actifuncion.php');
$num1=$_GET['n1']??0; // si la variable no llega se coloca ?? y el valor(0) para que se coloque valor por defecto
$num2=$_GET['n2']??0;// superglobales porque en cualquier momento se pueden usar $_get propias de php
$opc=$_GET['opc']??0;// recibe variables por la url entre [se coloca el nomb de la var a recibir]
var_dump($num1);
var_dump($num2);
// en la url se coloca  ( signo(?)nombre variable que se quiere pasar(=) y valor)

function calculadora(int $n1, int  $n2, string $opc)// tipados obliga a un dato a tener un parametro
{
    $resultado = '';

    switch ($opc) {// forma de llamar las funciones con switch
        case 's':// por el tema de concatenacion no se puede colocar el signo +
            $resultado = suma($n1, $n2);
            break;
        case '-':
            $resultado = resta($n1, $n2);
            break;
        case '*':
            $resultado = multiplicacion($n1, $n2);
            break;
        case '/':
            $resultado = division($n1, $n2);
            break;

        default:
            $resultado = ' Operacion invalida';
            break;
    }
    return "$n1 $opc $n2 = $resultado";// se devuelve el mensaje
}

echo calculadora($num1,$num2, $opc);// se captura el valor que se pasan por el get
