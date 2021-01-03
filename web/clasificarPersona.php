<?php

session_start();

include("../src/view/client.php");

$cliente = new Client();

$rut = $_SESSION["rut_s"];

$lectura = $cliente->buscarLecturas($rut); 

$imc = $lectura[0][3];

$clasificacion = "1";

if ($imc < 16.00) {
    $clasificacion = "Delgadez severa";
} else if ($imc  >= 16.00 && $imc  <= 16.99) {
    $clasificacion = "Delgadez moderada";
} else if ($imc  >= 17.00 && $imc  <= 18.49) {
   $clasificacion = "Delgadez aceptable";
} else if ($imc >= 18.50 && $imc <= 24.99) {
    $clasificacion = "Normal";
} else if ($imc >= 25 && $imc <= 29.99) {
    $clasificacion = "Pre-obeso";
} else if ($imc >= 30 && $imc <= 34.99) {
    $clasificacion = "Obeso tipo 1";
} else if ($imc >= 35 && $imc <= 39.99) {
    $clasificacion = "Obeso tipo 2";
} else if ($imc >= 40) {
    $clasificacion = "Obeso tipo 3";
}

setcookie($rut."/clasificacion", $clasificacion, time() + (3600 * 30), "/");

echo json_encode($lectura);


