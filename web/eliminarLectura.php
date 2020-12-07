<?php

session_start();

require("../src/view/client.php");

$id_lectura =  $_REQUEST["id_lectura"];

$cliente = new Client();


if ($id_lectura == 0) {
    if($cliente->eliminarTodo($_SESSION['rut_s'])) {
        echo true;
    }
} else {
    if ($cliente->eliminarLectura($id_lectura)) {
        echo true;
    }
}
