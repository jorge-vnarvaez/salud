<?php

$peso = (isset($_COOKIE[$_SESSION["rut_s"] . "/peso"])) ? $_COOKIE[$_SESSION["rut_s"] . "/peso"] . "kg" : "No registra";
$altura = (isset($_COOKIE[$_SESSION["rut_s"] . "/altura"])) ? $_COOKIE[$_SESSION["rut_s"] . "/altura"] . " cm" : "No registra";
$actividad = (isset($_COOKIE[$_SESSION["rut_s"] . "/actividad"])) ? $_COOKIE[$_SESSION["rut_s"] . "/actividad"] : "No registra";
$clasificacion = (isset($_COOKIE[$_SESSION["rut_s"] . "/clasificacion"])) ? $_COOKIE[$_SESSION["rut_s"] . "/clasificacion"] : "No registra";
