<?php

class reservasModel {
    // Obtiene una instancia de PDO para conectarse a la base de datos
    private $bd;
    private $pdo;

    public function __construct() {
        $this->bd = new DB();
        $this->pdo = $this->bd->getPDO();
    } 

    /**
     * Obtener todas las reservas de cada usuario
     * @param type $user
     */
    public function getReservas($user) {
        $stmt = $this->pdo->prepare('SELECT r.id_usuario, h.nombre, h.ciudad, ha.tipo, ha.descripcion, r.fecha_entrada, r.fecha_salida FROM reservas r join hoteles h on (r.id_hotel = h.id) join habitaciones ha on(r.id_habitacion = ha.id) where id_usuario = ?');
        $stmt->bindParam(1, $user);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Añadir una reserva
     * @param type $id_usuario
     * @param type $id_hotel
     * @param type $id_habitacion
     * @param type $fecha_entrada
     * @param type $fecha_salida
     */
    public function addReserva($user, $hotel, $habitacion, $entrada, $salida) {
        $stmt = $this->pdo->prepare('INSERT INTO reservas (id_usuario, id_hotel, id_habitacion, fecha_entrada, fecha_salida) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$user, $hotel, $habitacion, $entrada, $salida]);
    }
}