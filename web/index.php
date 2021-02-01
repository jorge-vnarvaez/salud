<?php

session_start();

if (!isset($_SESSION["rut_s"])) {
    header("Location: login.php");
    exit();
}

require("cookies.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Bienvenido/a </title>
    <link rel="stylesheet" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css" />
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" href="../web/css/normalize.css" />
    <link rel="stylesheet" href="../web/css/estilo.css" />
    <script type="text/javascript" src="js/codigo.js" defer></script>
    <script type="text/javascript" src="js/cargar.js" defer></script>
</head>

<!-- Aqui se cargan los datos de la persona -->

<body>

    <?php require("header.php"); ?>

    <section class="contenedor-cookies">
        <div class="contenedor contenido-cookies">

            <div class="iconos">
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
    </section><!-- Seccion de cookies -->

    <main>
        <div class="contenedor contenedor-indice">
            <h2>Nueva lectura</h2>
            <form action="actionNuevaLectura.php" method="post">

                <div class="box">
                    <div class="inside-box">
                        <label for="peso_kg">Peso (Kg.): </label>
                        <input type="number" name="peso_kg" id="peso_kg" min="20" max="300" step="0.1" required />
                    </div>
                    <div id="slider_peso"></div>
                </div><!-- Esta caja lleva separacion -->

                <div class="box">
                    <div class="inside-box">
                        <label for="estatura_mt">Estatura (Mts.): </label>
                        <input type="number" name="estatura_mt" id="estatura_mt" min="1.0" max="2" step="0.01" required />
                    </div>
                    <div id="slider_altura"></div>
                </div><!-- Esta caja lleva separacion -->


                <div class="box">
                    <div>
                        <label for="nivel_actividad">Actividad física: </label>
                    </div>

                    <div class="inside-box">
                        <select class="w-100" name="nivel_actividad">
                            <option value="1">Poco o ningún ejercicio</option>
                            <option value="2">(1 - 3 dias a la semana)</option>
                            <option value="3">(3 - 5 dias a la semana</option>
                            <option value="4">(6 - 7 dias a la semana</option>
                            <option value="5">(2 veces el día)</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit" id="generarReporte">Reporte</button>

            </form>
        </div>


    </main><!-- Formulario para llevar a cabo una lectura -->


</body>

</html>