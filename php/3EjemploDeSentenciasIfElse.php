<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de sentencias If-Else</title>
</head>

<body>
    <?php
    $t = date("H");
    if ($t < "20") {
        echo "Ten un buen día!";
    } else {
        echo "Ten una buena noche!";
    }

    ?>

</body>

</html>