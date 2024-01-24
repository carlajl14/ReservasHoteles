<?php

class usersView {
    /**
     * Mostrar el login y comprobar si hay error al verificar
     */
    public function login($booleano = true) {
        echo '<div class="container">';
        echo '<div class="square">';
        echo '<i style="--clr:#00ff0a;"></i>';
        echo '<i style="--clr:#ff0057;"></i>';
        echo '<i style="--clr:#fffd44;"></i>';
        echo '<div class="login">';
        echo '<h2>Reservas Login</h2>';
        echo '<form method="POST" action="index.php?controller=users&action=verificarDatos">';
        echo '<div class="inputBX">';
        echo '<label>Usuario</label>';
        echo '<input type="text" name="username" placeholder="Nombre de usuario" required">';
        echo '</div>';
        echo '<div class="inputBX">';
        echo '<label>Contraseña</label>';
        echo '<input type="password" name="pass" placeholder="Contraseña" required">';
        echo '</div>';
        echo '<div class="inputBX">';
        echo '<button class="boton" type="submit" name="login">Iniciar Sesión</button>';
        //Comprobar si los datos son correctos
        if ($booleano == false) {
            echo '<p class=text-white">Usuario o contraseña incorrectos</p>';
        }
        echo '</div>';
        echo '</form>';
        echo '</div>';
        echo '</div>';

        //Comprobar si existe la cookie
        if (isset($_COOKIE['fecha'])) {
            echo '<p class="date">Última conexión ' . $_COOKIE['fecha'] . '</p>';
        }
    }
}