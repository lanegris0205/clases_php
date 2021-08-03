<?php

require_once ('Sesionpoo.php');
//$email = $_REQUEST['email'];
//$password = $_REQUEST['password'];
$sesionpoo=new Sesionpoo();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$sesionpoo->validar($id,$email,$password);
if($_REQUEST['cerrar']){
    $sesionpoo->cerrarsesion();
}



?>

