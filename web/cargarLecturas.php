<?php

session_start();

include("../src/view/client.php");

$cliente = new Client();

$lecturas = $cliente->buscarLecturas($_SESSION["rut_s"]);

echo json_encode($lecturas);