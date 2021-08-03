<?php //abre etiquetas para cogidos php
print "Mi rimer codigo en PHP! "; // el print solo permite imprimir un resultado y todo debe terminar en;
echo " Mi rimer codigo en PHP", " Practica"; // el echo imprime mas de un resultado
// dentro de las cadenas se puede agregar etiquetas html 
echo "<p> Mi rimer codigo en PHP </p>", " <h1>Practica</h1>";

// variables
// Las variables en PHP se escriben iniciando con el signo $ y luego darle nombre y valor
# variable numerica
$numeroCinco = 5; // como su valor es numero no necesita comillas, para imprimir se coloca el echo

echo $numeroCinco;
echo "<br><br>"; // permite realizar un salto de linea
echo " Esta es la variable numero: $numeroCinco <br>"; // la variable puede estar dentro de la cadena de texto
var_dump($numeroCinco); // el var_dum nos permite identificar errores y las variables que se llaman
echo "<br><br>";

#variable texto
$palabra = "nombre";
echo "esto es una variabe tipo texto: $palabra <br>";
var_dump($palabra);
echo "<br><br>";
#variable booleana permite colocar variables de falso imprime 0  o vacio y verdadero imprime 1
 $booleana = true;
 echo " esto es una variable booleana: $booleana <br>";
 echo "<br><br>";
 #variables de tipo arreglo, permite almacenar mas de una informacion
 $colores=array("amarillo","rojo","azul");
 echo "los cololores son: $colores[1] <br>";
 var_dump($colores);
 echo "<br><br>";
 #variable arreglo con propiedades,especifica un nombre a cada indice
 $verduras=array("verdura1"=>"lechuga","verdura2"=>"cebolla");
 echo"Variable arreglo con propiedades: $verduras[verdura1] <br>";
 var_dump($verduras);
 echo "<br><br>";
#variable tipo objeto
$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo"variable objeto: $frutas->fruta1 <br>";//para llamar el valor se usa el ->
var_dump($frutas);

?>
<!--cierra etiquetas codigo de php-->