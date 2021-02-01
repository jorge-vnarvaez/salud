<?php

session_start();

if (!isset($_SESSION["rut_s"])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tu IMC es</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script type="text/javascript" src="js/cargar.js"></script>
</head>

<!-- Se esta cargando la funcion clasificar persona y los datos de la persona-->

<body>

    <header>
        <div class="contenedor contenedor-header">
            <h3><span id="nombre_persona"></span>.<br /> La nueva lectura indica que: </h3>
            <ul class="barra">
                <li>
                    <a href="misLecturas.php">Mis lecturas.</a>
                </li>
                <li>
                    <a href="formConfigCuenta.php">Configuración cuenta.</a>
                </li>
                <li>
                    <a href="cerrarSesion.php">Cierra sesión</a>
                </li>

            </ul>
        </div>
    </header>

    <section>
        <div class="contenedor contenedor-indice">

            <p>Su Índice de Masa Corporal es: <span id="clasi"></span></p>

            <table>
                <tr>
                    <th>Clasificación</th>
                    <th>IMC (kg/m<sup>2</sup>)</th>
                </tr>
                <tr id="clasificacion_1">
                    <td>Delgadez severa</td>
                    <td>16.00</td>
                </tr>
                <tr id="clasificacion_2">
                    <td>Delgadez moderada</td>
                    <td>16.00 - 16.99</td>
                </tr>
                <tr id="clasificacion_3">
                    <td>Delgadez aceptable</td>
                    <td>17.00 - 18.49</td>
                </tr>
                <tr id="clasificacion_4">
                    <td>Normal</td>
                    <td>18.50 - 24.99</td>
                </tr>

                <tr id="clasificacion_5">
                    <td>Pre-obeso (riesgo)</td>
                    <td>25.00 - 29.99</td>
                </tr>

                <tr id="clasificacion_6">
                    <td>Obeso tipo 1 (riesgo moderado)</td>
                    <td>30.00 - 34.99</td>
                </tr>
                <tr id="clasificacion_7">
                    <td>Obeso tipo 2 (riesgo severo)</td>
                    <td>35.00 - 39.99</td>
                </tr>
                <tr id="clasificacion_8">
                    <td>Obeso tipo 3 (riesgo muy severo)</td>
                    <td>>= 40.00</td>
                </tr>
            </table>

            <a class="btn btn-primary" href="index.php">Nueva lectura</a>

        </div>
    </section>


</body>

</html>