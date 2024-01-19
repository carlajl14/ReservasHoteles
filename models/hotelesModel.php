<?php

class hotelesModel {
    // Obtiene una instancia de PDO para conectarse a la base de datos
    private $bd;
    private $pdo;

    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    } 

    /**
     * Obtener la información de todos los hoteles
     */
    public function getHoteles() {
        $stmt = $this->pdo->prepare('SELECT * FROM hoteles');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Obtener información de un hotel
     */
    public function getHotel($codigo) {
        $stmt = $this->pdo->prepare('SELECT * FROM hoteles WHERE id = ?');
        $stmt->bindParam(1, $codigo);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}