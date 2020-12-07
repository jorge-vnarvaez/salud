<?php

$msg = "";

if (isset($_REQUEST["errores"])) {
    $errores = unserialize($_REQUEST["errores"]);
    foreach ($errores as $error) {
        $msg .= $error . "*";
    }
} 


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Crear nueva cuenta</title>
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css" />
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../web/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../web/css/estilo.css" />
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/cargar.js"></script>
</head>

<body>

    <header>
        <div class="contenedor contenedor-header">
            <h3>Crear nueva cuenta.</h3>
        </div>
    </header>

    <section class="section">
        <div class="contenedor contenedor-nuevo">
            <div class="contenido-nuevo">



                <form action="actionNuevoUsuario.php" method="POST">
                    <h4>DATOS PERSONALES</h4>

                    <span class="error-f"><?php echo $msg ?></span>

                    <div class="box">
                        <label for="rut">RUT: </label>
                        <input type="text" name="rut" title="Ej: 178589522 (sin puntos y guión)" />
                    </div>

                    <div class="box">
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" />
                    </div>


                    <div class="box">
                        <label for="genero">Género: </label>
                        <input type="radio" name="genero" value="masculino" checked />Masculino
                        <input type="radio" name="genero" value="femenino" />Femenino
                    </div>

                    <div class="box">
                        <label for="telefono">Teléfono: </label>
                        <input type="text" name="telefono" title="Ej: 947520236 (9 dígitos)" />
                    </div>

                    <div class="box">
                        <label for="correo">Correo: </label>
                        <input type="email" name="correo" title="Ej: example@gmail.com" />
                    </div>

                    <div class="box">
                        <label for="direccion">Dirección: </label>
                        <input type="text" name="direccion" />
                    </div>

                    <div class="box">
                        <label for="fecha_nacimiento">Fecha nacimiento: </label>
                        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" autocomplete="off" />
                    </div>

                    <h4>SALUD</h4>
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

                    <div class="footer-nuevo">
                        <input type="submit" class="btn btn-dd" />
                        <input type="reset" class="btn btn-grey" value="Limpiar" />
                    </div>

                </form>
            </div>


        </div>


    </section>

</body>

</html>