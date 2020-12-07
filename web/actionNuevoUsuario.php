<?php

require("../src/view/client.php");
require("../src/vo/persona.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errores = array();

    $vacio = 0;

    $rut = empty($_POST["rut"]) ? $vacio++ : $_POST["rut"];
    $nombre = empty($_POST["nombre"]) ? $vacio++ : $_POST["nombre"];
    $direccion = empty($_POST["direccion"]) ? $vacio++ : $_POST["direccion"];
    $telefono = empty($_POST["telefono"]) ? $vacio++ : $_POST["telefono"];
    $correo = empty($_POST["correo"]) ? $vacio++ : $_POST["correo"];
    $peso = empty($_POST["peso_kg"]) ? $vacio++ : $_POST["peso_kg"];
    $altura = empty($_POST["estatura_mt"]) ? $vacio++ : $_POST["estatura_mt"];
    $genero = empty($_POST["genero"]) ? $vacio++ : $_POST["genero"];
    $fecha_nacimiento = empty($_POST["fecha_nacimiento"]) ? $vacio++ : $_POST["fecha_nacimiento"];


    if ($vacio > 0) {
         array_push($errores, "Campos vacíos");
    } else {

        $cliente = new Client();

        $persona = new Persona($rut, $nombre, $direccion, $telefono, $correo, $peso, $altura, $genero, $fecha_nacimiento);

        if($cliente->buscarPersona($rut)) {
            array_push($errores, "El RUT ingresado ya se encuentra en uso.");
        } else if($cliente->existeCorreo($correo)) {
            array_push($errores, "El correo ingresado ya se encuentra en uso.");
        } else {
           if($cliente->nuevoUsuario($persona)) {
               header("Location: login.php");
               exit();
           } 
            
        }
        
    }

    header("Location: nuevoUsuario.php?errores=" . serialize($errores));
    exit();
}
