<?php

class db {
    private $pdo;

    public function __construct() {
        require $_SERVER['DOCUMENT_ROOT'].'/ReservasHoteles/config/config.php';
        
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo "<p>Estamos actualizando la página web</p>";
        }
    }
    
    public function getPDO() {
        return $this->pdo;
    }
}
