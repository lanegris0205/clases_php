<?php
#POO PROGRAMACION ORIENTADA A OBJETO
# CODIGO IMPERATIVO O CODIGO SPAGUETTI
// primero se declaran las variables con cualquier valor
$automovil1=(object)["marca"=>"Toyota", "modelo"=> "corolla"]; // variable de tipo objeto primer valor se llama marca y la segunda modelo
$automovil2=(object)["marca"=>"Hyundai", "modelo"=> "Accent Vision"]; 

echo"variable objeto: $automovil1->marca <br>";
function mostrar($automovil){ // luego se crean las funciones debe mostrar el parametro automovil 
  
    echo "<p>Hola! soy un ". $automovil-> marca, " modelo ". $automovil-> modelo."</p>";

}
mostrar($automovil1);
mostrar($automovil2);



