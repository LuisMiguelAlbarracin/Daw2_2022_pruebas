<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de bucle FOR EACH</title>
</head>

<body>
    <?php
    $colores = array("rojo", "verde", "azul", "amarillo");

    foreach ($colores as $valor) {
        echo "$valor <br>";
    }

    ?>

</body>

</html>