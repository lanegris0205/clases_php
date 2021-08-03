<?php
require_once('../base/funcionliquidacion.php');
$salario = $_GET['salario'] ?? '';
$salario=intval($salario);
$cedula = $_GET['cedula'] ?? '';

$salud = $pension = $arl = $fps = 0;
$errorsalario = '';

if ($salario && $cedula) {
    /*var_dump($salario);
    $salud = $salario * 0.04;
    $pension = $salario * 0.04;
    $arl = $salario * 0.005;*/
    $salud = deducible($salario, 'salud');
    $pension = deducible($salario, 'pension');
    $arl = deducible($salario, 'arl');
    $fps = deducible($salario, 'fps');
}
if (isset($_GET['salario']) && !$_GET['salario']) {
    $errorsalario = 'Debe ingresar un salario';
}
if (isset($_GET['salario']) && $_GET['salario'] && $salario) {
    $errorsalario = 'Debe ingresar numero mayor a 0';
}


/*if ($salario > 3634104) {
    $fps = $salario * 0.01;

}*/
?>