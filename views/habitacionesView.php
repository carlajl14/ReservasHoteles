<?php

class habitacionesView {

    /**
     * Mostrar las habitaciones disponibles de cada habitación
     * @param type $habitaciones
     * @param type $booleano para comprobar si se ha reservado
     */
    public function viewHabitaciones($habitaciones, $booleano) {
        // Comprobar las fechas
        $fecha_actual = date("Y-n-j");
        $fecha_siguiente = date("Y-n-j",strtotime($fecha_actual."+ 1 days"));

        // Comprobar la reserva
        if ($booleano == true) {
            echo '<h3>Reserva Añadida</h3>';
        }

        // id_hotel
        if (isset($_POST['hotel'])) {
            $hotel = $_POST['hotel'];
        }

        echo '<h1 class="text-center mt-5">Habitaciones Disponibles</h1>';
        echo '<div class="container_cards">';
        foreach ($habitaciones as $habitacion) {
            echo '<div class="cards bg-dark">';
            echo '<p class="card_title">Hotel '.$habitacion['id_hotel'].'</p>';
            echo '<div class="card_content">';
            echo '<p>Número de habitaciones: ' . $habitacion['num_habitacion'] . '</p>';
            echo '<p>Tipo de habitación: ' . $habitacion['tipo'] . '</p>';
            echo '<p>Precio: ' . $habitacion['precio'] . ' €</p>';
            echo '<p>Descripción: ' . $habitacion['descripcion'] . '</p>';
            echo '<form method="POST" action="index.php?controller=reservas&action=newReserva">';
            // Fecha de entrada
            echo '<p class"text_fecha">Fecha de entrada:</p>';
            echo '<input class="fecha" type="date" name="fecha_entrada" min="'. $fecha_actual .'" max="2024-12-31" required>';
            // Fecha de salida
            echo '<p class"text_fecha">Fecha de salida:</p>';
            echo '<input class="fecha" type="date" name="fecha_salida" min="'. $fecha_siguiente .'" max="2024-12-31" required>';
            // Habitación
            echo '<input type="number" name="habitacion" hidden value="'. $habitacion['id'] .'">';
            // Hotel
            echo '<input type="number" name="hotel" hidden value="'. $hotel .'">';
            echo '<button type="submit" class="btn btn-success boton">Reservar</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}