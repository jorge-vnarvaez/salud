<?php

if (isset($_REQUEST["existe"])) {
    $msg = "(*) Correo y/o RUT invalidos, por favor reintente.";
} else {
    $msg = " ";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Jorge Valdes" />
    <title>Login Salud</title>
    <link rel="stylesheet" type="text/css" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css" />
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../web/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../web/css/estilo.css" />
    <script type="text/javascript" src="../web/js/codigo.js"></script>
</head>

<body>
    <header>
        <div class="contenedor contenedor-header">
            <h1>Salud y bienestar.</h1>
        </div>
    </header>

    <div class="section">
        <div class="contenedor-login contenedor">

            <div class="login-header">
                <h3>Login</h3>
            </div>

            <div class="login-content">

                <form method="POST" action="procesarLogin.php">
                    <div class="box">
                        <label for="correo">Correo: </label>
                        <input type="email" name="correo" />
                    </div>
                    <div class="box">
                        <label for="rut">Rut: </label>
                        <input type="password" name="rut" />
                    </div>
                    <span class="error"><?php echo $msg ?></span>

            </div>

            <div class="login-footer">
                <input class="btn btn-dd" type="submit" value="Entrar" />
                <button class="btn btn-grey"><a href="nuevoUsuario.php" target="_blank">Registrarse</a></button>

                </form>
            </div>

        </div>
    </div>


</body>

</html>