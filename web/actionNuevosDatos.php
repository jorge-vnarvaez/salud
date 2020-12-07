<?php

include("../src/view/client.php");
include("../src/vo/persona.php");



$vacio = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    global $direccion;

    $cliente = new Client();

    global $vacio;

    if (empty($_POST["nueva_direccion"])) {
        $vacio++;
    }

    if (empty($_POST["nuevo_telefono"])) {
        $vacio++;
    }

    if (empty($_POST["nuevo_correo"])) {
        $vacio++;
    }


    if ($vacio > 0) {
        $modificado = 0;
    } else {

        session_start();

        $direccion = $_POST["nueva_direccion"];
        $telefono = $_POST["nuevo_telefono"];
        $correo = $_POST["nuevo_correo"];

        $persona = new Persona($_SESSION["rut_s"], $direccion, $telefono, $correo);


        if ($cliente->existeCorreo($correo)) {
            $modificado = 2;
        } else {
            if ($cliente->modificarDatos($persona)) {
                $modificado = 1;
            }
        }
    }


    header("Location: formConfigCuenta.php?modificado=" . $modificado);
    exit();
}
