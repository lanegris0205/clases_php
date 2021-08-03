<?php
$porsalud = 0.04;
$porpension = 0.04;
$porarl = 0.005;
$porfps = 0.01;

function salud($salario, $porsalud)
{
    return $salario * $porsalud;
}

function pension($salario, $porpension)
{
    return $salario * $porpension;
}

function arl($salario, $porarl)
{
    return $salario * $porarl;
}

function fps($salario, $porfps)
{
    
    $smlv = 1014980; 
    if ($salario>($smlv*4)) {
        return $salario * $porfps;
    }
    else{
      return  $porfps=0;
    }
   
}
