<?php
require $_SERVER['DOCUMENT_ROOT'].'/cabecera.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
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