<?php

include $_SERVER['DOCUMENT_ROOT'].'/db/db.php';

class usersModel {
    // Obtiene una instancia de PDO para conectarse a la base de datos
    private $bd;
    private $pdo;

    public function __construct() {
        $this->bd =new DB();
        $this->pdo = $this->bd->getPDO();
    } 

    /**
     * Conexión para la base de datos
     */
    public function getAllUsers() {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtener el nombre del usuario y crear una sesión
     * @param type $username
     */
    public function getUsername($username) {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $stmt->bindParam(1, $username);
        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Mostrar el nombre del usuario
        foreach ($usuarios as $user) {
            $_SESSION['user'] = $user['nombre'];
        }
    }
}