<?php

function calcularIMC($altura, $peso)
{
    $altura = pow($altura, 2);

    $imc = round(($peso / $altura), 2);

    return $imc;
}


function calcularTmb($persona)
{

    $tmb = 0;

    $edad = $persona->calcularEdad();

    // Version Miffin-St.Jeor 
    // Hombre: $tmb = (10 * $peso) + (6.25 * $estatura_cm) - (5 * $edad) + 5;
    // Mujer: $tmb = (10 * $peso) + (6.25 * $estatura_cm) - (5 * $edad) - 161;

    // Version Harris-Benedict
    // Hombre: $tmb = 88.362 + (13.397 * $peso) + (4.799 * $estatura_cm) - (5.677 * $edad);
    // Mujer: $tmb = 447.593 + (9.247 * $peso) + (3.098 * $estatura_cm) - (4.330 * $edad);

    /* strcasecmp devuelve 0 si son iguales, pero PHP convierte los 0 en false en 
        las condicionales por ende negamos la sentencia para que sea true*/
    if (!strcasecmp($persona->getGenero(), "masculino")) {

        $tmb = 88.362 + (13.397 * $persona->getPeso()) + (4.799 * $persona->getAltura()) - (5.677 * $edad);
    } else {

        $tmb = 447.593 + (9.247 * $persona->getPeso()) + (3.098 * $persona->getAltura()) - (4.330 * $edad);
    }

    return round($tmb, 2);
}

function calcularCalDia($nivelActividad, $tmb)
{

    $kcal = 0;

    $resultado =  array();

    if ($nivelActividad == 1) {
        $nivelActividad = "Poca";
        $kcal = $tmb * 1.2;
    } else if ($nivelActividad == 2) {
        $nivelActividad = "Ligera";
        $kcal = $tmb * 1.375;
    } else if ($nivelActividad == 3) {
        $nivelActividad = "Moderada";
        $kcal = $tmb * 1.55;
    } else if ($nivelActividad == 4) {
        $nivelActividad = "Fuerte";
        $kcal = $tmb * 1.725;
    } else {
        $nivelActividad = "Muy fuerte";
        $kcal = $tmb * 1.9;
    }

    array_push($resultado, $kcal, $nivelActividad);

    return $resultado;
}
