<?php

class usersController {
    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    public function __construct() {
        $this->model = new usersModel();
        $this->view = new usersView();
    }

    /**
     * Mostrar la función de login
     */

    public function viewLogin() {
        $sesion = true;
        $this->view->login($sesion);
    }

    /**
     * Comprobar los datos introducidos en el formulario
     */
    public function verificarDatos() {
        //Devolver los datos de los usuarios
        $user = $this->model->getAllUsers($_POST['username'], $_POST['pass']);

        if ($user == false) {
            $this->cerrarSesion();
            $this->view->login($user);
        } else {
            //Obtener el nombre del usuario
            $u = $this->model->getUsername($_POST['username']);

            //Redireccionar
            header("Location: index.php?controller=hoteles&action=mostrarHoteles");
        }    
    }

    /**
     * Cierra la sesión y redirige al index
     */
    public function cerrarSesion() {
        //Cookie para la última hora de conexión
        $fecha = date("d/m/Y | H:i:s");
        setcookie("fecha", $fecha, time() + 3600 * 24);

        //Eliminar la sesión
        session_destroy();

        //Redirigir al inicio
        header("Location: index.php?index.php?controller=users&action=viewLogin");
    }
}