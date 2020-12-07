<?php

session_start();

if (!isset($_SESSION["rut_s"])) {
    header("Location: login.php");
    exit();
}


$peso = (isset($_COOKIE[$_SESSION["rut_s"] . "/peso"])) ? $_COOKIE[$_SESSION["rut_s"] . "/peso"] . "kg" : "No registra";
$altura = (isset($_COOKIE[$_SESSION["rut_s"] . "/altura"])) ? $_COOKIE[$_SESSION["rut_s"] . "/altura"] . " cm" : "No registra";
$actividad = (isset($_COOKIE[$_SESSION["rut_s"] . "/actividad"])) ? $_COOKIE[$_SESSION["rut_s"] . "/actividad"]:"No registra";
$clasificacion = (isset($_COOKIE[$_SESSION["rut_s"] . "/clasificacion"])) ? $_COOKIE[$_SESSION["rut_s"] . "/clasificacion"]:"No registra";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Bienvenido/a </title>
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css" />
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../web/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../web/css/estilo.css" />
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/cargar.js"></script>
</head>

<body onload="cargarXML('datosPersona.php', datosPersona);">

    <header>
        <div class="contenedor contenedor-header">
            <h3>Bienvenido/a <span id="nombre_persona"></span>. </h3>
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

    <section class="contenedor-anterior">
        <div class="contenedor contenido-anterior">
            <h3 class="centrar-texto fw-300">Su última lectura indica: </h3>
            <div class="anterior-texto">

                <div class="icon">
                    <p>Peso</p>
                    <img src="https://img.icons8.com/windows/64/000000/fat-man.png" />
                    <p><?php echo  $peso ?></p>
                </div>

                <div class="icon">
                    <p>Altura</p>
                    <img src="https://img.icons8.com/windows/64/000000/body-type-tall.png" />
                    <p><?php echo $altura ?></p>
                </div>

                <div class="icon">
                    <p>Actividad</p>
                    <img src="https://img.icons8.com/ios-filled/50/000000/sneakers.png" />
                    <p><?php echo $actividad ?></p>
                </div>

                <div class="icon">
                    <p>IMC</p>
                    <img src="https://img.icons8.com/ios-filled/50/000000/non-profit-organisation.png" />
                    <p><?php echo $clasificacion ?></p>
                </div>


            </div>
        </div>
    </section>


    <div class="contenedor">
        <div class="contenedor-indice">
            <h2>Nueva lectura</h2>
            <form action="actionNuevaLectura.php" method="post">
                <div class="box">
                    <label for="peso_kg">Peso (Kg.): </label>
                    <input type="number" name="peso_kg" id="peso_kg" min="20" max="300" step="0.1" required />
                </div>
                <div id="slider_peso"></div>


                <div class="box">
                    <label for="estatura_mt">Estatura (Mts.): </label>
                    <input type="number" name="estatura_mt" id="estatura_mt" min="1.0" max="2" step="0.01" required />
                </div>
                <div id="slider_altura"></div>


                <div>
                    <label for="genero">Género: </label>
                </div>
                <div class="box">
                    <input type="radio" name="genero" value="masculino" checked />Masculino
                    <input type="radio" name="genero" value="femenino" />Femenino
                </div>

                <!--<div class="box">
                    <label for="fechaNacimiento">Fecha nacimiento: </label>
                    <input type="text" name="fecha_nacimiento" id="fechaNacimiento" autocomplete="off" required />
                </div>-->

                <div class="box">
                    <label for="nivel_actividad">Actividad física: </label>
                </div>

                <div class="box">
                    <select name="nivel_actividad">
                        <option value="1">Poco o ningún ejercicio</option>
                        <option value="2">(1 - 3 dias a la semana)</option>
                        <option value="3">(3 - 5 dias a la semana</option>
                        <option value="4">(6 - 7 dias a la semana</option>
                        <option value="5">(2 veces el día)</option>
                    </select>
                </div>



                <button id="generarReporte" class="btn btn-dark" type="submit">Generar reporte salud</button>

            </form>
        </div>
    </div>
</body>

</html>