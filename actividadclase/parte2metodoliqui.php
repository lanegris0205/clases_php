
<?php

ini_set('display_errors', 1); // permite mostrar los errores en el localhost
error_reporting(E_ALL);
require_once('funliqui.php');
$sueldo = $_REQUEST['sueldo'] ?? '';
$sueldo = intval($sueldo); // se como el get recibe el dato en string se debe pasar a int con el inval

$cedula = $_REQUEST['cedula'] ?? '';
$salud = $pension = $ARL = $fps = 0;
$errorsueldo = '';

if ($sueldo && $cedula) {
    //var_dump($salario);
    $salud = deducible($sueldo, 'salud');
    $pension = deducible($sueldo, 'pension');
    $ARL = deducible($sueldo, 'ARL');
    $fps = deducible($sueldo, 'fps');
}
if (isset($_REQUEST['sueldo']) && !$_REQUEST['sueldo']) { // la funcion isset valida algo si existe o no  de lo contrario si es vacio muestre error
    $errorsueldo = 'Ingresa un valor valido';
}
if (isset($_REQUEST['sueldo']) && $_REQUEST['sueldo'] && !$sueldo) { //con esta condicion se valida si existe algo, si esta el salario y que el sueldo sea diferente a 0

    $errorsueldo = 'Debe ingresar solo numeros';
}
$aPahtOrigin = explode('?', $_SERVER['HTTP_REFERER']);//  el server nos sirve para colocar la url y el explode para eliminar parte del texto
$pahtOrigin=$aPahtOrigin[0];
var_dump($aPahtOrigin);
header("Location: $pahtOrigin?salud=$salud & pension=$pension & ARL=$ARL & fps=$fps");

?>