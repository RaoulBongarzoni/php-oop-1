<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>test</h1>

    <?php

    require __DIR__ . '/Models/Movie.php';

    $mov_first = new Movie("test", "regista", "horror", 1999, "lorem ipsum", "immagine");

    echo "<h2>stampa di test</h2>";
    var_dump($mov_first);
    ?>

</body>

</html>