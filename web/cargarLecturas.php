<?php

session_start();

include("../src/view/client.php");

$cliente = new Client();

$lecturas = $cliente->buscarLecturas($_SESSION["rut_s"]);

$txt = "";

$txt .= "<tr>
            <th>TMB</th>
            <th>IMC</th>
            <th>Fecha</th>
            </tr>";

foreach($lecturas as $lectura) {

    $txt .= "<tr onclick=eliminarLectura({$lectura[0]})>";
    $txt .= "<td>{$lectura[2]}</td>";
    $txt .= "<td>{$lectura[3]}</td>";
    $txt .= "<td>{$lectura[4]}</td></tr>";

}

echo $txt;