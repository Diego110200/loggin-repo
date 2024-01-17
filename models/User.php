<?php

class User {
    private $db;

    public function __construct() {
        // Conectar a la base de datos (modifica los parámetros según tu configuración)
        $host = 'localhost';
        $dbname = 'login';
        $username = 'root';
        $password = '';

        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getUserByUsername($username) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE username = :username');
        $query->bindParam(':username', $username);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function registerUser($username, $password, $nombre, $apellido) {
        // Hash de la contraseña
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Insertar usuario en la base de datos
        $query = $this->db->prepare('INSERT INTO usuario (username, password, nombre, apellido) VALUES (:username, :password, :nombre, :apellido)');
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $hashedPassword);
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':apellido', $apellido);
    
        return $query->execute();
    }
}
?>