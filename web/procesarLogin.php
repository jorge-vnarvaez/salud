<?php

session_start();

include("../src/view/client.php");

$cliente = new Client();

$persona = $cliente->validarLogin($_POST["rut"], $_POST["correo"]);

if ($persona) {
    $_SESSION["correo"] = $_POST["correo"];
    $_SESSION["rut_s"] = $_POST["rut"];
    header("Location: index.php");
} else {
    header("Location: login.php?existe=1");
}
