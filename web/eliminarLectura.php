<?php

session_start();

require("../src/view/client.php");

$id_lectura =  $_POST["id"];

/*$cliente = new Client();

$exito = false;

switch($id_lectura) {
    case 0:
        $exito = $cliente->eliminarTodo($_SESSION['rut_s']);
        break;
    default: 
        $exito = $cliente->eliminarLectura($id_lectura);
        break;
}*/

echo $id_lectura;



