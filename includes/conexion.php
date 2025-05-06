<?php
class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $clave = ''; // vacía en XAMPP por defecto
    private $baseDatos = 'cesar_bags_and_packs';
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->usuario, $this->clave, $this->baseDatos);

        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        $this->conn->set_charset("utf8");
    }

    public function cerrar() {
        $this->conn->close();
    }
}
?>