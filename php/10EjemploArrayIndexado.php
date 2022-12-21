<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de array indexado</title>
</head>

<body>
    <?php
    $coches = array("Volvo", "BMW", "Toyota");
    $arrLong = count($coches);

    for ($x = 0; $x < $arrLong; $x++) {
        echo $coches[$x];
        echo "<br>";
    }

    ?>

</body>

</html>