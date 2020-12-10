<?php

include("../src/utils/connection.php");



class personaDAO extends Connection
{

    function existeCorreo($correo)
    {

        try {

            $conn = $this->conectar();

            $sql = "SELECT * FROM persona WHERE correo=?";

            $stmt = $conn->prepare($sql);
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

        $conn = null;
    }


    function buscarPersona($rut)
    {

        try {

            $conn = $this->conectar();

            $sql = "SELECT * FROM persona WHERE rut=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            $persona = $stmt->fetchAll();

            return $persona;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }


    function validarLogin($rut, $correo)
    {
        try {

            $conn = $this->conectar();

            $sql = "SELECT * FROM persona WHERE rut=? AND correo=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->bindValue(2, $correo);
            $stmt->execute();

            $persona = $stmt->fetchAll();

            return $persona;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }



    function nuevoUsuario($persona)
    {

        try {

            $conn = $this->conectar();

            $sql = "INSERT INTO persona (rut, nombre, direccion, telefono, correo, peso, altura, genero, fecha_nacimiento) 
                    values(?,?,?,?,?,?,?,?,?)";

            $stmt = $conn->prepare($sql);
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

        $conn = null;
    }


    function modificarDatos($persona)
    {

        try {

            $conn = $this->conectar();

            $sql = "UPDATE persona set direccion=?, telefono=?, correo=? where rut=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $persona->getDireccion());
            $stmt->bindValue(2, $persona->getTelefono());
            $stmt->bindValue(3, $persona->getCorreo());
            $stmt->bindValue(4, $persona->getRut());
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }


    function actualizarPersona($persona)
    {

        try {

            $conn = $this->conectar();

            $sql = "UPDATE persona SET peso=?, altura=? WHERE rut=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $persona->getPeso());
            $stmt->bindValue(2, $persona->getAltura());
            $stmt->bindValue(3, $persona->getRut());

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }



    ////////////// LECTURAS ///////////////

    function nuevaLectura($lectura)
    {

        try {

            $conn = $this->conectar();

            $sql = "INSERT INTO lectura (rut_persona, tmb, imc, fecha) values(?,?,?,?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $lectura->getRut());
            $stmt->bindValue(2, $lectura->getTmb());
            $stmt->bindValue(3, $lectura->getImc());
            $stmt->bindValue(4, $lectura->getFecha());
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }

    function buscarLecturas($rut)
    {

        try {

            $conn = $this->conectar();

            $sql = "SELECT * FROM lectura WHERE rut_persona=? ORDER BY id_lectura DESC";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            $lectura = $stmt->fetchAll();

            return $lectura;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }

    function eliminarLectura($id_lectura)
    {

        try {

            $conn = $this->conectar();

            $sql = "DELETE FROM lectura WHERE id_lectura=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $id_lectura);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }

    function eliminarTodo($rut)
    {

        try {

            $conn = $this->conectar();

            $sql = "DELETE FROM lectura WHERE rut_persona=?";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $rut);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }

        $conn = null;
    }
}
