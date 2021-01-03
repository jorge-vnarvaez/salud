<?php

include("../src/view/client.php");

$cliente = new Client();

$persona = $cliente->validarLogin($_POST["rut"], $_POST["correo"]);

if ($persona) {

    session_start();

    $_SESSION["correo"] = $_POST["correo"];
    $_SESSION["rut_s"] = $_POST["rut"];
    header("Location: index.php");
    
} else {
    header("Location: login.php?existe=1");
}
