<?php

session_start();

if (!isset($_SESSION["rut_s"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_REQUEST["modificado"])) {
    $msg = " ";
} else if ($_REQUEST["modificado"] == 1) {
    $msg = "(*) Datos modificados con exito!!";
} else if ($_REQUEST["modificado"] == 2) {
    $msg = "El correo ingresado ya existe, por favor intente con otro.";
} else {
    $msg = "Error campos vacios.";
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Cambiar mis datos</title>
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css" />
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../web/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../web/css/estilo.css" />
    <script type="text/javascript" src="js/codigo.js"></script>
</head>

<body>
    <header>
        <div class="contenedor contenedor-header">
            <h3>Configuración de la cuenta.</span></h3>
            <ul class="barra">
                <li>

                    <a href="misLecturas.php">Mis lecturas.</a>
                </li>
                <li>

                    <a href="cerrarSesion.php">Cerrar sesión.</a>
                </li>

            </ul>
        </div>

    </header>

    <section class="contenedor">
            <div class="contenedor-modificar">

                <form method="POST" action="actionNuevosDatos.php">

                    <div class="box">
                        <label for="nueva_direccion">Dirección: </label>
                        <input type="text" name="nueva_direccion" />

                    </div>
                    <div class="box">
                        <label for="nuevo_telefono">Teléfono: </label>
                        <input type="text" name="nuevo_telefono" title="Ej: 947520236 (9 dígitos)" />

                    </div>
                    <div class="box">
                        <label for="nuevo_correo">Correo: </label>
                        <input type="email" name="nuevo_correo" title="Ej: example@gmail.com" />

                    </div>

                    <!--<p class="vacio"><?php //echo $msg ?></p> -->

                   <div class="modificar-botones">
                        <button type="submit" class="btn btn-primary">Modificar datos</button>
                        <button type="reset" class="btn btn-red">Limpiar</button>
                        <a class="btn btn-blanco" href="index.php">Volver</a>
                    </div>


                </form>


            </div>




    </section>




</body>

</html>