<?php
class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $this->connection = new mysqli(
            DatabaseConfig::DB_HOST,
            DatabaseConfig::DB_USER,
            DatabaseConfig::DB_PASSWORD,
            DatabaseConfig::DB_NAME
        );
        // Verifica errores de conexión
        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    }
    // ... (métodos para obtener instancia y conexión)
}
?>