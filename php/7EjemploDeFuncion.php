<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de función</title>
</head>

<body>
    <?php
    function nombreCompleto($nombre){
        echo "$nombre Molina.<br>";
    }


    nombreCompleto("Sara");
    nombreCompleto("Pedro");
    nombreCompleto("Lola");
    nombreCompleto("Antonio");
    
    ?>

</body>

</html>