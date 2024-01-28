<?php

class reservasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new reservasModel();
        $this->view = new reservasView();
    }

    /**
     * Mostrar una tabla con la información de las reservas
     */
    public function mostrarReservas() {
        if (isset($_SESSION['user'])) {
            $id = $_COOKIE['id_user'];
            $reservas = $this->model->getReservas($id);

            $this->view->mostrarReservas($reservas);
        } else {
            header("Location: index.php?controller=users&action=cerrarSesion");
        }
    }

    /**
     * Añadir una reserva
     */
    public function newReserva() {
        $fecha_entrada = $_POST['fecha_entrada'];
        $fecha_salida = $_POST['fecha_salida'];
        $user = $_COOKIE['id_user'];
        $hotel = $_POST['hotel'];
        $habitacion = $_POST['habitacion'];
        $fecha_actual = date("Y-n-j");
        $fecha_incorrecta = $fecha_entrada <= $fecha_actual && $fecha_salida <= $fecha_actual;

        // Comprobar las fechas introducidas por el usuario
        if ($fecha_entrada >= $fecha_salida) {
            $booleano = false;
            header("Location: index.php?controller=hoteles&action=mostrarHoteles");
        //} else if($fecha_incorrecta) {
            //$booleano = false;
            //header("Location: index.php?controller=hoteles&action=mostrarHoteles");
        } else {
            $booleano = true;
            $reserva = $this->model->addReserva($user, $hotel, $habitacion, $fecha_entrada, $fecha_salida);
            header("Location: index.php?controller=reservas&action=mostrarReservas");
        }
    }
}