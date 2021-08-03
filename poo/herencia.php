<?php
require_once ('Employee.php');

$employee= new Employee(60);
var_dump($employee->getUserId());
var_dump($employee->getPassword());
echo '<br><br>';

$employee->setName('Juan');
$employee->setLastname('Garcia');
var_dump($employee->getFullName());

echo '<br><br>';

// ejercicio para la proxima clase: crear el login,logua,secion pasarla orientada a objeto
//crear una tabla id ,email,password
?>