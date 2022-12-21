<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación Array</title>
</head>

<body>
    <?php
    //Generar 30 variables altura
    $altura1 = 164;
    $altura2 = 178;
    $altura3 = 169;
    //...
    $altura30 = 182;
    //Media de alturas
    $media = ($altura1 + $altura2 + $altura3 + $altura30) / 30;
    //Arrays
    $alturasPrimer = array(164, 178, 169, 182);
    $alturasSegundo = [164, 178, 169, 182];
    //Mostrar una posición del Array
    echo "La posición 0 del array es: " . $alturasSegundo[0];
    echo "<br>";
    echo "La posición 2 del array es: " . $alturasSegundo[2];
    //Modificar el contenido de una posición
    echo "<br>";
    $alturasSegundo[2] = 178;
    echo "La nueva posición 2 del array es: " . $alturasSegundo[2];
    //Anyadir un nuevo elemento
    $alturasSegundo[] = 189;
    echo "<br>";
    echo "La nueva posición 4 del array es: " . $alturasSegundo[4];
    //Imprimir todos los elementos
    echo "<br>-------<br>";
    print_r($alturasSegundo);
    echo "<br>-------<br>";
    //Eliminar un elemento
    unset($alturasSegundo[2]);
    echo "<br>";
    echo "La nueva posición 3 del array es: " . $alturasSegundo[3];
    echo "<br>-------<br>";
    print_r($alturasSegundo);
    echo "<br>-------<br>";
    ?>

</body>

</html>