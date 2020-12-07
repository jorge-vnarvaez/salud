<?php

session_start();

if (!isset($_SESSION["rut_s"])) {
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tu IMC es</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script type="text/javascript" src="js/codigo_tabla.js"></script>
    <script type="text/javascript" src="js/cargar.js"></script>

</head>


<body onload="cargarXML('datosPersona.php?', datosPersona);
    cargarXML('clasificarPersona.php', clasificarPersona)">

    <header>
        <div class="contenedor contenedor-header">
            <h3><span id="nombre_persona"></span>.<br /> La nueva lectura indica que: </h3>
            <ul class="barra">
                <li>
                    <img src="../web/img/lectura.png" />
                    <a href="misLecturas.php">Mis lecturas.</a>
                </li>
                <li>
                    <img src="../web/img/config.png" />
                    <a href="formConfigCuenta.php">Configuración cuenta.</a>
                </li>
                <li>
                    <img src="../web/img/exit.png" />
                    <a href="cerrarSesion.php">Cierra sesión</a>
                </li>

            </ul>
        </div>
    </header>

    <div class="contenedor">
        <div class="contenedor-indice">

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
            <button type="button" class="btn btn-dark btn-icon">
                <img src="../web/img/new.png" />
                <a href="index.php">Nueva lectura</a>
            </button>

        </div>
    </div>


</body>

</html>