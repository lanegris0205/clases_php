<?php

// funciones son codigos que se repiten
// en los parentesis van los parametros de entrada una buena practica es no tener mas de 4 parametros

function concatenar1(){
    return 'la concatenacion';
}
echo concatenar1();
echo '<br>';
function concatenar($txt1,$txt2) {// verifica unos caracteres
    return $txt1. ' '.$txt2;// salida de la funcion
}

echo concatenar('Hola', 'Mundo'); // muestra el mensaje
