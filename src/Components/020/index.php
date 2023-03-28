<?php

require __DIR__ . '/TV.php';


$tv1 = new TV;
$tv2 = new TV;
$tv3 = new TV;


$tv1 -> kanalas = 7;
$tv2 -> kanalas = 5;
$tv3 -> kanalas = 55;



$kanalai = [
    5 => ' Discovery',
    7 => 'Animal Planet',
    55 => 'MTV',
    91 => 'BBC'
];

TV::$kanalai = $kanalai;

// VISIEMS
// $tv1 ->kanalai = $kanalai;
// $tv2 ->kanalai = $kanalai;
// $tv3 ->kanalai = $kanalai;

$tv1 -> kanalas = 91;
$tv2 -> kanalas = 55;
$tv3 -> kanalas = 91;

$tv1-> koksKanalasIjungtas();
$tv2-> koksKanalasIjungtas();
$tv3-> koksKanalasIjungtas();