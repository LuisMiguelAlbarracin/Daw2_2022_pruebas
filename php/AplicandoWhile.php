<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicando While</title>
</head>

<body>
    <?php
    $numNoticias = 4;
    while ($numNoticias > 0) {
    ?>
        <p>
        <h3>Noticia <?php echo $numNoticias; ?></h3>
        <h5>Esta es una noticia interesante</h5>
        <span>Texto de la noticia</span>
        </p>

    <?php
        $numNoticias--;
    }   ?>

</body>

</html>