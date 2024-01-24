<?php

class hotelesController {
    // Obtiene una instancia del modelo y de la vista de hoteles
    private $model;
    private $view;

    public function __construct() {
        $this->model = new hotelesModel();
        $this->view = new hotelesView();
    }

    /**
     * Vista para los hoteles
     */
    public function mostrarHoteles() {
        if (isset($_SESSION['user'])) {
            $hoteles = $this->model->getHoteles();

            $this->view->viewHoteles($hoteles);
        } else {
            header("Location: index.php?controller=users&action=cerrarSesion");
        }
        
    }
}