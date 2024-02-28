<?php
class db
{
    private $server = "localhost";
    private $db = "php_db";
    private $user = "root";
    private $password = "";

    public function connection()
    {
        try {
            $connection = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
