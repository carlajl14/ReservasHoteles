<?php

class habitacionesModel {
    // Obtiene una instancia de PDO para conectarse a la base de datos
    private $bd;
    private $pdo;

    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    } 

    /**
     * Conexión para la base de datos
     * @param type $hotel es el id del hotel
     */
    public function getHabitaciones($hotel) {
        $stmt = $this->pdo->prepare('SELECT * FROM habitaciones WHERE id_hotel=?');
        $stmt->bindParam(1, $hotel);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}