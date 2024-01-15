<?php

session_start();

if (isset($_SESSION['user'])) {
    echo '<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Reservas Hotel</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css"/>
    </head>
    <main>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Reservas Hotel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Hoteles&action=listarHoteles">Hoteles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=Reservas&action=listarMisReservas">Mis Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=users&action=cerrarsesion">Cerrar Sesion</a>
      </li>
    </ul>
    <span class="navbar-text">';
          $username = $_SESSION['user'];
          echo "Usuario: ".ucfirst($username);
    echo '</span>
  </div>
</nav>'; 
}else{
//Navbar para los que NO han iniciado sesion.
    echo '<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Reservas Hotel</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css" />
    </head>';
}

?>