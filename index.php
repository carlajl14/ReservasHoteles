<!DOCTYPE html>

<?php
session_start();
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reservas Hoteles</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/hoteles.css"/>
        <link rel="stylesheet" href="css/habitaciones.css"/>
        <link rel="stylesheet" href="css/reservas.css"/>
    </head>
    <body>
        <?php
        require $_SERVER['DOCUMENT_ROOT'].'/views/templates/cabecera.php';
        //Añadir el frontcontroller
        include './frontcontroller.php';
        ?>
    </body>
</html>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/views/templates/footer.php';
?>