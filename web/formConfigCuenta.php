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
                    <img src="../web/img/lectura.png" />
                    <a href="misLecturas.php">Mis lecturas.</a>
                </li>
                <li>
                    <img src="../web/img/exit.png" />
                    <a href="cerrarSesion.php">Cerrar sesión.</a>
                </li>

            </ul>
        </div>

    </header>

    <section class="section">
        <div class="contenedor">
            <div class="contenedor-modificar">

                <form method="POST" action="actionNuevosDatos.php">

                    <div class="box">
                        <label for="nueva_direccion">Dirección: </label>
                        <input type="text" name="nueva_direccion" />
                        <img src="https://img.icons8.com/android/24/000000/pencil.png" />
                    </div>
                    <div class="box">
                        <label for="nuevo_telefono">Teléfono: </label>
                        <input type="text" name="nuevo_telefono" title="Ej: 947520236 (9 dígitos)" />
                        <img src="https://img.icons8.com/android/24/000000/pencil.png" />
                    </div>
                    <div class="box">
                        <label for="nuevo_correo">Correo: </label>
                        <input type="email" name="nuevo_correo" title="Ej: example@gmail.com"/>
                        <img src="https://img.icons8.com/android/24/000000/pencil.png" />
                    </div>

                    <p class="vacio"><?php echo $msg ?></p>

                    <div class="modificar-botones">
                        <button type="submit" class="btn btn-dark">Modificar datos</button>
                        <button type="reset" class="btn btn-dark">Limpiar</button>
                        <button type="button" class="btn btn-dark"><a href="index.php">Volver</a></button>
                    </div>


                </form>


            </div>

        </div>


    </section>




</body>

</html>