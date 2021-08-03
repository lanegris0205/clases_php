<?php

function deducible($sueldo, $tipo)
{ // se le coloca dos parametros el salario y el tipo
    $porcen = 0; // se crea la variable porcentaje inicializandola en cero
    $smlv = 1014980;
    switch ($tipo) {
        case 'salud':// se coloca el nombre de cada tipo
            $porcen = 0.04; // da el porcentaje de cada una
            break;
        case 'pension':
            $porcen = 0.04;
            break;
        case 'ARL':
            $porcen = 0.005;
            break;
        case 'fps':
            $porcen=0;// se declara de primero para evitar hacer else
            if ($sueldo> ($smlv * 4)) {// si esta regla no se cumple el porcen es igual a cero
                $porcen = 0.01;
            }
            
            break;
    }
    return $sueldo * $porcen; // se devuelve el resultado del salario por porcentaje
}
