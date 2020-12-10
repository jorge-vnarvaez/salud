<?php
session_start();

include("../src/vo/lectura.php");
include("calculosSalud.php");
require("../src/view/client.php");
include("../src/vo/persona.php");

$cliente = new Client();

$rut = $_SESSION["rut_s"];
$peso = $_POST["peso_kg"];
$altura = $_POST["estatura_mt"];
$genero = $_POST["genero"];
$nivel_actividad = $_POST["nivel_actividad"];
$fecha_nacimiento = $cliente->buscarPersona($rut)[0][8];


$estatura_cm = (100 * $altura) / 1;

$persona = new Persona($rut, $peso, $estatura_cm, $genero, $fecha_nacimiento);


$fecha_actual = new DateTime();

$fecha_actual = $fecha_actual->format("Y-m-d");

$imc = calcularIMC($altura, $peso);

$tmb = calcularTmb($persona);

$lectura = new Lectura($rut, $tmb, $imc, $fecha_actual);

$cliente->actualizarPersona($persona);

$resultados = calcularCalDia($nivel_actividad, $tmb);

setcookie($rut."/actividad", $resultados[1], time() + (3600 * 30), "/");

if($cliente->nuevaLectura($lectura)) {
    header("Location: vistaTabla.php");
    exit();
}
