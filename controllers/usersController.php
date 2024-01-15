<?php

class usersController {
    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;

    public function __construct() {
        $this->model = new usersModel();
        $this->view = new usersView();
    }

    public function viewLogin() {
        $users = $this->model->getAllUsers();

        $this->view->login($users);
    }

    /**
     * Muestra un saludo al usuario
     */
    public function saludo() {
        if (isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            echo '<h1>Bienvenid@ '. $user .'</h1>';
        }
    }

    /**
     * Comprobar los datos introducidos en el formulario
     */
    public function verificarDatos() {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        //Devolver los datos de los usuarios
        $users = $this->model->getAllUsers();

        //Variable para comprobar la sesión
        $sesion = true;

        foreach ($users as $user) {
            //Comprobar los datos introducidos
            if ($user['nombre'] == $username && $user['contraseña'] == $pass) {
                $sesion = true;
            }

            //Inicio de sesión
            if ($sesion == true) {
                $_SESSION['user'] = true;

                //Obtener el nombre del usuario
                $u = $this->model->getUsername($username);

                //Redireccionar
                header("Location: index.php?controller=users&action=saludo");
            } 

            //Si no se ha iniciado la sesión
            if ($sesion == false) {
                $this->cerrarSesion();
                $this->view->login($sesion);
            } 
        }       
    }

    /**
     * Cierra la sesión y redirige al index
     */
    public function cerrarSesion() {
        //Cookie para la última hora de conexión
        $fecha = date("d/m/Y | H:i:s");
        setcookie("fecha", $fecha, time() + 3600 * 24);

        //setcookie("username", $username, time() - 3601);

        //Eliminar la sesión
        session_destroy();

        //Redirigir al inicio
        header("Location: index.php?index.php?controller=users&action=viewLogin");
    }
}