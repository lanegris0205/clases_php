
<?php
require_once('liqui2.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidacion</title>
</head>

<body>
    <form action="">
        <label>Salario</label>
        <input type="number" name="salario">
        <label style="color:red"><?php echo $errorsalario ?></label>
        <br>
        <label>Cedula</label>
        <input type="number" name="cedula">
        <?php
        if (isset($_GET['cedula']) && !$_GET['cedula']) {
            echo '<label style="color:red">Debe ingresar cedula</label>';
        }
        ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($salario && $cedula) {

    ?>
        <table border="1">

            <tr>
                <th>cedula</th>
                <th>salario</th>
                <th>salud(4%)</th>
                <th>pension(4%)</th>
                <th>ARL(0.5%)</th>
                <th>Fondo pension solidario(1%> 4SMLV)</th>
            </tr>
            <tr>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $salario; ?></td>
                <td><?php echo $salud; ?></td>
                <td><?php echo $pension; ?></td>
                <td><?php echo $arl; ?></td>
                <td><?php echo $fps; ?></td>
            </tr>
        </table>
    <?php
    }
    ?>

</body>

</html>