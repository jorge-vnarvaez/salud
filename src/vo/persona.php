<?php


class Persona
{

    protected $rut;
    protected $nombre;
    protected $peso;
    protected $altura;
    protected $direccion;
    protected $telefono;
    protected $correo;
    protected $genero;
    protected $fecha_nacimiento;



    function __construct()
    {
        $get_arguments = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct' . $number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    function __construct9($rut, $nombre,  $direccion, $telefono, $correo, $peso, $altura, $genero, $fecha_nacimiento) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function __construct6($rut, $nombre, $peso, $altura, $genero, $fecha_nacimiento)
    {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function __construct5($rut, $peso, $altura, $genero, $fecha_nacimiento)
    {
        $this->rut = $rut;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->genero = $genero;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function __construct4($rut, $direccion, $telefono, $correo) {
        $this->rut = $rut;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setPeso($peso)
    {
        $this->peso = $peso;
    }

    function setAltura($altura)
    {
        $this->altura = $altura;
    }

    function setGenero($genero)
    {
        $this->genero = $genero;
    }

    function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }


    

    function getRut()
    {
        return $this->rut;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function getGenero()
    {
        return $this->genero;
    }

    function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }


    function calcularEdad()
    {

        $anioActual = (int) getdate()["year"];

        $anioNacimiento = (int) substr($this->fecha_nacimiento, 0, 4);

        return $anioActual - $anioNacimiento;
    }
}
