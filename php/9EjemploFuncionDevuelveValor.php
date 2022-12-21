<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de función que devuelve un valor</title>
</head>
<body>
    <?php
    function suma($x, $y){
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 =" . suma(5, 10) . "<br>";
    echo "7 + 13 =" . suma(7, 13) . "<br>";
    echo "2 + 4 =" . suma(2, 4);
    

    ?>
    
</body>
</html>