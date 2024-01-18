<?php

class hotelesView {

    public function tableHoteles($hoteles) {
        echo '<div class="cont">';
        echo '<table class="table table-primary">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Dirección</th>';
        echo '<th scope="col">Ciudad</th>';
        echo '<th scope="col">País</th>';
        echo '<th scope="col">Habitaciones Disponibles</th>';
        echo '<th scope="col">Descripción</th>';
        echo '<th scope="col">Imagen</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($hoteles as $hotel) {
            echo '<tr>';
            echo '<td scope="row">'. $hotel['nombre'] .'</td>';
            echo '<td scope="row">'. $hotel['direccion'] .'</td>';
            echo '<td scope="row">'. $hotel['ciudad'] .'</td>';
            echo '<td scope="row">'. $hotel['pais'] .'</td>';
            echo '<td scope="row">'. $hotel['num_habitaciones'] .'</td>';
            echo '<td scope="row">'. $hotel['descripcion'] .'</td>';
            echo '<td scope="row"><img style="width: 50px" src="data:image/jpeg; base64,'.base64_encode($hotel['foto']).'"></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    }
}