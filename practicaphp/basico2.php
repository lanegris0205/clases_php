<?php
#funciones sin parametros/ ejecuta una tarea

function saludo(){
    echo "hola<br>";// tarea a ejecutar solo es la declaracion
}       
saludo();// de esta forma se ejecuta

#funcion con parametros
function despedida($adios){
    echo $adios."<br>";// con el punto se concatena una cadena de texto con una variable
}
despedida("chao");
#funciones con retorno

function retorno($retornar){
    return $retornar;
}
echo retorno("retornando <br>") ;
#condicionales
 $a=5;
 $b=10;

 if ($a > $b) { // if significa si
     echo "$a es mayor a $b"; 
 }
 
 else if($a==$b){// else if significa "y si "
    echo "$a es igual a $b";
 } 
 
 else{// else significa "si no"
     echo " $a es menor que $b";
 }
echo "<br><br>";
 #switches

 $dia= "sabado";

 switch ($dia) {
     case 'sabado':
        echo "voy a estudiar php";
         break;
     case 'viernes':
        echo "voy a la fiesta ";
         break;    
     
     case 'domingo':
        echo "voy a descansar";
         break;
     default:
         echo "voy a la universidad";
         
 }
 echo "<br>";

 #ciclos o array

 $n=1; // variable 

 while ($n < 5) { // ciclo while permite dar una condiciona
    echo $n; // primero se coloca el echo y luego el incremento
     $n++; // que incremente la variable}
    
 }
 echo "<br>";

 #do while

 $m=1;

 do { // hacer
     echo $m; // se imprima 
     $m++; // se incremente

 } while ($m <= 5);
 echo "<br>";
 # for

 for ($i=0; $i <=5; $i++) { // inicia en 0;mientras i se ; i se incremente
     echo $i; // imprimir i
 }

