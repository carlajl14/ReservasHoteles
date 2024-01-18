<!DOCTYPE html>

<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/cabecera.php';
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reservas Hoteles</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <?php
        //Añadir el frontcontroller
        include './frontcontroller.php';
        ?>
    </body>
</html>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>