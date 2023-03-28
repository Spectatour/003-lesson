<?php

require __DIR__ . '/Miskas.php';
require __DIR__ . '/Zveris.php';



$bebras = new Zveris('bebras', 'raudona');

$bebras -> say();

echo '<pre>';
var_dump($bebras);

$bebras->sayTevoBu();