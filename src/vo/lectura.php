<?php

class Lectura {

    private $id_lectura;
    private $rut_persona;
    private $tmb;
    private $imc;
    private $fecha;

    function __construct($rut_persona, $tmb, $imc, $fecha) {
        $this->rut_persona = $rut_persona;
        $this->tmb = $tmb;
        $this->imc = $imc;
        $this->fecha = $fecha;
    }


    function setRutPersona($rut_persona) {
       $this->rut_persona = $rut_persona;
    }

    function setImc($imc) {
       $this->imc = $imc;
    }

    function setTmb($tmb) {
        $this->tmb = $tmb;
    }

    function getRut() {
        return $this->rut_persona;
    }

    function getImc() {
        return $this->imc;
    }

    function getTmb() {
        return $this->tmb;
    }

    function getIdLectura() {
        return $this->id_lectura;
    }

    function getFecha() {
        return $this->fecha;
    }

}