<?php

require __DIR__ . 'php-oop-1/Models/Movie.php';

$mov_first = new Movie("test", "regista", "horror", 1999, "lorem ipsum", "immagine");

echo "<h2>stampa di test</h2>";
var_dump($mov_first);
