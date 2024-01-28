<?php

if (isset($_SESSION['user'])) {
    echo '<main>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Reservas Hotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=hoteles&action=mostrarHoteles">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=reservas&action=mostrarReservas">Reservas</a>
      </li>
    </ul>
    <span class="navbar-text" style="margin-right: 20px;">';
          $username = $_SESSION['user'];
          echo "Usuario: ".ucfirst($username);
    echo '</span>
    <a class="btn btn-danger" href="index.php?controller=users&action=cerrarsesion">Cerrar Sesion</a>
  </div>
</nav>
</main>'; 
}

?>