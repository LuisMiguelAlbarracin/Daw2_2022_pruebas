<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de función con varios argumentos</title>
</head>
<body>
    <?php
    function nombreCompleto($nombre , $anyo){
        echo "$nombre Molina. Fecha nacimiento : $anyo <br>";
    }

    nombreCompleto("Sara", "1977");
    nombreCompleto("Pedro", "1992");
    ?>
    
</body>
</html>