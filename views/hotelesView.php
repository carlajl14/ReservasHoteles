<?php

class hotelesView {

    /**
     * Función para mostrar los hoteles
     */
    public function viewHoteles($hoteles) {
        echo '<h1 class="title">Hoteles Disponibles</h1>';
        foreach ($hoteles as $hotel) {
            echo '<section>';
            echo '<div class="box">';
            echo '<h2 class="titulo">' . $hotel['nombre'] . '</h2>';
            echo '<div class="cont">';
            echo '<div class="imgBx">';
            echo '<img class="img" src="data:image/jpeg; base64,'.base64_encode($hotel['foto']).'">';
            echo '</div>';
            echo '<div class="content">';
            echo '<p class="info">Dirección: '. $hotel['direccion'] .', '. $hotel['ciudad'] .' ('. $hotel['pais'] .')</p>';
            echo '<p class="info">Habitaciones disponibles: '. $hotel['num_habitaciones'] .'</p>'; 
            echo '<p class="info">Descripcioón: '. $hotel['descripcion'] .'</p>'; 
            echo '<form method="POST" action="index.php?controller=habitaciones&action=mostrarHabitaciones">
            <input type="number" name="hotel" hidden value="'. $hotel['id'] .'"/>
            <button type="submit" name="info" class="btn btn-success">Habitaciones Disponibles</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        }
    }
}