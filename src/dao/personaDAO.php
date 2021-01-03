<?php

include("../src/utils/connection.php");



class personaDAO extends Connection
{

    function __construct() {
        parent::__construct();
    }

    function existeCorreo($correo)
    {

        try {

            $sql = "SELECT * FROM persona WHERE correo=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $correo);
            $stmt->execute();

            $persona = $stmt->fetchAll();

            foreach ($persona as $datos) {
                if ($datos["correo"] == $correo) {
                    return true;
                    break;
                }
            }

            return $persona;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }


    function buscarPersona($rut)
    {

        try {

            $sql = "SELECT * FROM persona WHERE rut=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            $persona = $stmt->fetchAll();

            return $persona;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }


    function validarLogin($rut, $correo)
    {
        try {


            $sql = "SELECT * FROM persona WHERE rut=? AND correo=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->bindValue(2, $correo);
            $stmt->execute();

            $persona = $stmt->fetchAll();

            return $persona;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }



    function nuevoUsuario($persona)
    {

        try {

            $sql = "INSERT INTO persona (rut, nombre, direccion, telefono, correo, peso, altura, genero, fecha_nacimiento) 
                    values(?,?,?,?,?,?,?,?,?)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $persona->getRut());
            $stmt->bindValue(2, $persona->getNombre());
            $stmt->bindValue(3, $persona->getDireccion());
            $stmt->bindValue(4, $persona->getTelefono());
            $stmt->bindValue(5, $persona->getCorreo());
            $stmt->bindValue(6, $persona->getPeso());
            $stmt->bindValue(7, $persona->getAltura());
            $stmt->bindValue(8, $persona->getGenero());
            $stmt->bindValue(9, $persona->getFechaNacimiento());

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }


    function modificarDatos($persona)
    {

        try {

            $sql = "UPDATE persona set direccion=?, telefono=?, correo=? where rut=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $persona->getDireccion());
            $stmt->bindValue(2, $persona->getTelefono());
            $stmt->bindValue(3, $persona->getCorreo());
            $stmt->bindValue(4, $persona->getRut());
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }


    function actualizarPersona($persona)
    {

        try {

            $sql = "UPDATE persona SET peso=?, altura=? WHERE rut=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $persona->getPeso());
            $stmt->bindValue(2, $persona->getAltura());
            $stmt->bindValue(3, $persona->getRut());

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }



    ////////////// LECTURAS ///////////////

    function nuevaLectura($lectura)
    {

        try {

            $sql = "INSERT INTO lectura (rut_persona, tmb, imc, fecha) values(?,?,?,?)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $lectura->getRut());
            $stmt->bindValue(2, $lectura->getTmb());
            $stmt->bindValue(3, $lectura->getImc());
            $stmt->bindValue(4, $lectura->getFecha());
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }

    function buscarLecturas($rut)
    {

        try {

            $sql = "SELECT * FROM lectura WHERE rut_persona=? ORDER BY id_lectura DESC";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            $lectura = $stmt->fetchAll();

            return $lectura;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }

    function eliminarLectura($id_lectura)
    {

        try {

            $sql = "DELETE FROM lectura WHERE id_lectura=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $id_lectura);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }

    function eliminarTodo($rut)
    {

        try {

            $sql = "DELETE FROM lectura WHERE rut_persona=?";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $this->conn = null;
    }
}
