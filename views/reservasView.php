<?php

class reservasView {
    /**
     * Modal para añadir una reserva
     * @param type $reservas
     */
    public function mostrarReservas($reservas) {
        echo '<h1 class="text-center title">Tus Reservas</h1>';
        echo '<table class="table table-light tabla">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Ciudad</th>';
        echo '<th scope="col">Tipo</th>';
        echo '<th scope="col">Descripción</th>';
        echo '<th scope="col">Fecha Entrada</th>';
        echo '<th scope="col">Fecha salida</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        foreach ($reservas as $reserva) {
            echo '<tr>';
            echo '<td>' . $reserva['nombre'] . '</td>';
            echo '<td>' . $reserva['ciudad'] . '</td>';
            echo '<td>' . $reserva['tipo'] . '</td>';
            echo '<td>' . $reserva['descripcion'] . '</td>';
            echo '<td>' . $reserva['fecha_entrada'] . '</td>';
            echo '<td>' . $reserva['fecha_salida'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
}