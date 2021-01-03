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
    <meta charset="UTF-8" />
    <title>Mis lecturas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script type="text/javascript" src="js/cargar.js"></script>
</head>

<!-- Aqui se cargan las lecturas -->
<body class="lecturas">

    <header>
        <div class="contenedor contenedor-header">
            <h3>Historial lecturas.</h3>
            <ul class="barra">
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

    <section class="section">
        <div class="contenedor contenedor-lecturas">

            <div class="botones-lecturas">
                <button type="button" class="btn btn-dark btn-icon">
                    <img src="../web/img/home.png" />
                    <a href="index.php">Volver</a>
                </button>
                <button type="button" class="btn btn-rojo btn-icon" onclick="eliminarLectura(0)">
                    <img src="../web/img/trash.png" />
                    Borrar
                </button>
            </div>
            <table id="tabla_lecturas">
                <tr>
                    <th>Fecha</th>
                    <th>IMC</th>
                    <th>TMB</th>
                </tr>

            </table>
        </div>
    </section>

</body>

</html>