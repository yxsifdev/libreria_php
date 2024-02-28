<?php
class userModel
{
    private $connection;

    public function __construct()
    {
        require_once("../../config/connect.php");
        $con = new db();
        $this->connection = $con->connection();
    }

    public function insertar($nombre, $apellido, $edad)
    {
        try {
            $stament = $this->connection->prepare("INSERT INTO user (nombre, apellido, edad) VALUES (:nombre, :apellido, :edad)");
            $stament->bindParam(":nombre", $nombre);
            $stament->bindParam(":apellido", $apellido);
            $stament->bindParam(":edad", $edad);
            return ($stament->execute()) ? $this->connection->lastInsertId() : false;
        } catch (PDOException $e) {
            return false;
        }
    }

    // public function show($id)
    // {
    //     try {
    //         $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id LIMIT 1");
    //         $stament->bindParam(":id", $id);
    //         return ($stament->execute()) ? $stament->fetch(PDO::FETCH_ASSOC) : false;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    // public function index()
    // {
    //     try {
    //         $stament = $this->PDO->prepare("SELECT * FROM username");
    //         return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_ASSOC) : false;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    // public function update($id, $nombre, $apellido, $fechaNa, $edad, $telefono, $email)
    // {
    //     try {
    //         $stament = $this->PDO->prepare("UPDATE username SET nombre = :nombre, apellido = :apellido, fechaNa = :fechaNa, edad = :edad, telefono = :telefono, email = :email WHERE id = :id");
    //         $stament->bindParam(":id", $id);
    //         $stament->bindParam(":nombre", $nombre);
    //         $stament->bindParam(":apellido", $apellido);
    //         $stament->bindParam(":fechaNa", $fechaNa);
    //         $stament->bindParam(":edad", $edad);
    //         $stament->bindParam(":telefono", $telefono);
    //         $stament->bindParam(":email", $email);
    //         return ($stament->execute()) ? $id : false;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    // public function delete($id)
    // {
    //     try {
    //         $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
    //         $stament->bindParam(":id", $id);
    //         return ($stament->execute()) ? true : false;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
}
