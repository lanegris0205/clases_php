<?php
ini_set('display_errors', 1); // permite mostrar los errores en el localhost
error_reporting(E_ALL);
$sueldo = $_GET['sueldo'] ?? '';
$errorsueldo = $_GET['errorsueldo'] ?? '';
$salud=$_GET['salud']  ??'';
$pension=$_GET['pension']  ??'';
$ARL=$_GET['ARL']  ??'';
$fps=$_GET['fps']  ??'';

?>
<!DOCTYPE html>
<html lang="es">
<!--lenguaje del archivo-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA LIQUIDACION2</title>
    <!--titulo del archivo-->
</head>

<body>
    <!--formulario-->
    <form action="parte2metodoliqui.php" method="POST">
        <label>Sueldo</label>
        <input type="number" name="sueldo">
        <label style="color:blue"><?php echo $errorsueldo ?></label>
        <br><br>
        <label>Cedula</label>
        <input type="number" name="cedula">
        <?php
        if (isset($_GET['cedula']) && !$_GET['cedula']) {
            echo '<label style="color:blue">Ingresa numero de cedula </label>';
        }
        ?>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($sueldo && $cedula) { // con este if permite mostrar la table solo si tiene informacion
    ?>
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
                <td><?php echo $cedula; ?></td>
                <td><?php echo $sueldo; ?></td>
                <td><?php echo $salud; ?></td>
                <td><?php echo $pension; ?></td>
                <td><?php echo $ARL; ?></td>
                <td><?php echo $fps; ?></td>
            </tr>
        </table>
    <?php
    } // de esta manera se cierra el if en php
    ?>


</body>

</html>