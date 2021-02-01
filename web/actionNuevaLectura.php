<?php

session_start();

include("../src/vo/lectura.php");
include("calculosSalud.php");
require("../src/view/client.php");
include("../src/vo/persona.php");

$cliente = new Client();

// Variables para la creacion del objeto persona
$rut = $_SESSION["rut_s"];
$peso = $_POST["peso_kg"];
$altura = $_POST["estatura_mt"];
$nivel_actividad = $_POST["nivel_actividad"];
$genero = $cliente->buscarPersona($rut)[0][7];
$fecha_nacimiento = $cliente->buscarPersona($rut)[0][8];

// Conversion de altura mts a altura cm
$estatura_cm = (100 * $altura) / 1;

$persona = new Persona($rut, $peso, $estatura_cm, $genero, $fecha_nacimiento);

// Creacion y formato de la fecha actual para la lectura
$fecha_actual = new DateTime();
$fecha_actual = $fecha_actual->format("Y-m-d");

// Calcular el indice de masa corporal
$imc = calcularIMC($altura, $peso);

// Calcular tasa de metabolismo basal
$tmb = calcularTmb($persona);

// Creacion de nueva lectura
$lectura = new Lectura($rut, $tmb, $imc, $fecha_actual);

$cliente->actualizarPersona($persona);


$resultados = calcularCalDia($nivel_actividad, $tmb);
setcookie($rut."/actividad", $resultados[1], time() + (3600 * 30), "/");

/* Si la lectura se ha agregado con exito, el usuario
| es enviado a la tabla de clasificacion */
if($cliente->nuevaLectura($lectura)) {
    header("Location: vistaTabla.php");
}
