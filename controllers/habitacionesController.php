<?php

class habitacionesController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new habitacionesModel();
        $this->view = new habitacionesView();
    }

    /**
     * Mostrar la vista de las habitaciones disponibles
     */

    public function mostrarHabitaciones() {
        if (isset($_SESSION['user'])) {
            $id = $_POST['hotel'];
            $booleano = false;
            $habitaciones = $this->model->getHabitaciones($id);

            $this->view->viewHabitaciones($habitaciones, $booleano);
        } else {
            header("Location: index.php?controller=users&action=cerrarSesion");
        }
    }
}