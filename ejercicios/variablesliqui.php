<?php
require_once('funciones1.php');
$salario = $_GET['salario'] ?? '';
$cedula = $_GET['cedula'] ?? '';
$salud = $pension = $arl = $fps = 0;
$porsalud = 0.04;
$porpension = 0.04;
$porarl = 0.005;
$porfps = 0.01;
$smlv = 1014980;

$salud = salud($salario, $porsalud);
$pension = pension($salario, $porpension);
$arl = arl($salario, $porarl);
if ($salario > ($smlv * 4)) {
    $fps = fps($salario, $porfps);
}