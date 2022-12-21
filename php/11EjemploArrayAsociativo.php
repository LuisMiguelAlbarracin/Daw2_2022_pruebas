<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de array asociativo</title>
</head>
<body>
    <?php
    $edad = array("Pedro" => "25", "Ale" => "37", "Sara" => "23");

    foreach ($edad as $x => $x_valor) {
        echo "clave=" . $x . ", valor=" . $x_valor;
        echo "<br>";
    }

    ?>
    
</body>
</html>