<?php
session_start();

include("../src/view/client.php");

$cliente = new Client();

$persona = $cliente->buscarPersona($_SESSION["rut_s"]);


setcookie($_SESSION["rut_s"] . "/peso", $persona[0][5], time() + (3600 * 30), "/");
setcookie($_SESSION["rut_s"] . "/altura", $persona[0][6], time() + (3600 * 30), "/");


echo $persona[0][1];
