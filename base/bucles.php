<?php
/* los bucles o cilos son secuencia de instrucciones de código que se ejecuta repetidas veces,
 hasta que la condición asignada a dicho bucle deja de cumplirse 
puede ser infinito por error de programacion*/
$limit = 20;
/* tiene 3 parametros,1.desde donde inicia el ciclo,2. definir el limite
3. el incremento */
for ($i = 0; $i <= $limit; $i++) {
    echo ' El conteo va en ' . $i . '<br>';
}

$a = 5;
while ($a <= $limit) {// ciclo con una comparacion logica
    $a = $a * 2;

    echo ' El valor de a es: ' . $a . '<br>';
}

// mostrar numeros pares desde 0 hasta el 100

$b = 0;
$limit2 = 100;

while ($b <= $limit2) {

    echo ' El valor de b es: ' . $b . '<br>';
    $b += 2;
}
for ($b=1; $b <=100 ; $b++) { 
    if ($b%2==0) {
        echo "$b es par" . '<br>';
    }
}

for ($j = 0; $j <= $limit2; $j = $j + 2) {

    echo ' El valor de j es: ' . $j . '<br>';
}

// mostrar numeros pares  e impares hasta el 100
$c = 1;
while ($c <= $limit2) {
    $num = " El numero $c es ";

    if ($c % 2 === 0) {
        echo "$num par : " . '<br>';
    } else if ($c % 2 != 0) {
        echo "$num impar : " . '<br>';
    }
    $c++;
}

for ($k = 0; $k <= $limit2; $k++) {
    if ($k % 2 == 0) {
        echo "El valor de " . $k . " es par : " . '<br>';
    } else if ($k % 2 != 0) {
        echo "El valor de " . $k . " es impar : " . '<br>';
    }
}

//arreglos o array  
$motos = [
    'Vstrom 650xt',
    'Akt 125',
    'CBR 250R',
    'R1M',
];
var_dump($motos);
echo '<br>';
// en el arreglo anterior solo se signa un valor al array pero no se le asigna valor a la llave

foreach ($motos as $key => $valor) {
    echo "Llave: $key y valor: $valor <br>";
}

// en esta ocasion se le asigna valor a la llave 'mazda' con un valor cx5, no exite posicion 0(un ciclo dentro de otro ciclo)
// arreglo multidimencional
$autos = [// array en posicion 0 se le asigna un valor mazda
    'Mazda' => [// otro array donde se definen los tipos de carros de la marca mazda
        'CX5',
        '323',
        'CX7',
        '2',
    ],
    'BMW' => [
        'Serie 2',
        'Z4',
        'M1',
    ]
];

var_dump($autos);
echo '<br>';

//arreglo dentro de otro arreglo

foreach ($autos as $marca => $modelos) {
   echo  " En la $marca tenemos los modelos : ";
   foreach ($modelos as $key => $modelo) {
      echo " $modelo, ";
   }
   echo '<br>';
}

//echo $autos['Mazda'];
