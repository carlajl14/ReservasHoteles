<?php

include $_SERVER['DOCUMENT_ROOT'].'/db/db.php';

class usersModel {
    // Obtiene una instancia de PDO para conectarse a la base de datos
    private $bd;
    private $pdo;

    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    } 

    /**
     * Conexión para la base de datos
     */
    public function getAllUsers($username, $pass) {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre = ? AND contraseña = sha2(?, 256)');
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $pass);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
       
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

    /**
     * Obtener el id del usuario
     * @param type $username
     */
    public function getIdUser($username) {
        $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $stmt->bindParam(1, $username);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Recoger el id del usuario
        foreach ($users as $i) {
            setcookie("id_user", $i['id'], time() + 3600);
        }
    }
}