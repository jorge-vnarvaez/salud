<?php

require("../src/dao/personaDAO.php");

class Client
{

    private $personaDAO;

    function __construct()
    {
        $this->personaDAO = new personaDAO();
    }


    function existeCorreo($correo)
    {
        return $this->personaDAO->existeCorreo($correo);
    }


    function buscarPersona($rut)
    {
        $persona = $this->personaDAO->buscarPersona($rut);
        return $persona;
    }


    function validarLogin($rut, $correo)
    {
        $persona = $this->personaDAO->validarLogin($rut, $correo);
        return $persona;
    }


    function nuevoUsuario($persona)
    {
        return $this->personaDAO->nuevoUsuario($persona);
    }

    function actualizarPersona($persona)
    {
        $this->personaDAO->actualizarPersona($persona);
    }


    function modificarDatos($persona)
    {
        return $this->personaDAO->modificarDatos($persona);
    }




    ////////////// LECTURAS ////////////////////////////

    function buscarLecturas($rut)
    {
        $lecturas = $this->personaDAO->buscarLecturas($rut);
        return $lecturas;
    }

    function nuevaLectura($lectura)
    {
        if ($this->personaDAO->nuevaLectura($lectura)) {
            return true;
        } else {
            return false;
        }
    }

    function eliminarLectura($id_lectura)
    {
        if ($this->personaDAO->eliminarLectura($id_lectura)) {
            return true;
        } else {
            return false;
        }
    }

    function eliminarTodo($rut)
    {
        if ($this->personaDAO->eliminarTodo($rut)) {
            return true;
        } else {
            return false;
        }
    }
}
