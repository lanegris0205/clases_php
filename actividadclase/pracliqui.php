<?php
ini_set('display_errors', 1); // permite mostrar los errores en el localhost
error_reporting(E_ALL);
require_once('../ejercicios/funciones1.php');
$salario = $_GET['salario'] ?? ''; //como se coloque en el name debe ir colocado en los []
$cedula = $_GET['cedula'] ?? ''; // no tildes no espacio, las comillas es para que si no se coloca valor de vacio
$salud = $pension = $ARL = $fps = 0; //se declaran las variables con un valor 0

// se realiza una condicion donde si salario es diferente a vacio muestre algo

if ($salario && $cedula) {
    //var_dump($salario);
    $salud = salud($salario, $porsalud); // para aplicar una funcion se mira la variable en comun que seria salario
    $pension = pension($salario, $porpension); // se llama la funcion de cada uno
    $ARL = arl($salario, $porarl);
    $fps = fps($salario, $porfps);
}
?>

<!DOCTYPE html>
<html lang="es">
<!--lenguaje del archivo-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA LIQUIDACION</title>
    <!--titulo del archivo-->
</head>

<body>
    <!--formulario-->
    <form action="">
        <label>Salario</label>
        <input type="number" name="salario">
        <label style="color:red">
            <?php if (!$_GET['salario']) {
                echo 'Ingrese salario';
            }
            ?>
        </label>
        <br><br>
        <label>Cedula</label>
        <input type="number" name="cedula">
        <label style="color:red">
            <?php if ($_GET['cedula'] == '') {
                echo 'Ingrese numero de cedula';
            }
            ?></label>


        <br><br>
        <input type="submit" value="Enviar"><!-- es un boton tipo submit para enviar la informacion-->
    </form>
    <!-- el th muestra los titulos-->

    <?php
     if ($salario && $cedula) {// otro metodo para hacer que se vea la tabla con una condicion
        echo '
    
            <table border="3">
    
    
                <tr>
    
                    <th>Cedula</th>
                    <th>Salario</th>
                    <th>Salud (4%)</th>
                    <th>Pension(4%)</th>
                    <th>ARL(0.5%)</th>
                    <th>Fondo Pension Solidario(1%> 4 SMLV)</th>
                </tr>
                <tr>
                    <td>'.$cedula.'</td>
                    <td> '.$salario.'</td>
                    <td>'.$salud.'</td>
                    <td>'.$pension.'</td>
                    <td>'.$ARL.'</td>
                    <td>'.$fps.'</td>
                </tr>
    
            </table>';
        
        }
        ?>
</body>

</html>