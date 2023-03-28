<!-- 4. Masyvai -->
<!-- 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25. -->

<?php

$masyvas = array();

for ($i = 0; $i < 30; $i++) {
    $masyvas[$i] = rand(5, 25);
}

print_r($masyvas);

echo '<br>';

// Naudodamiesi 1 uždavinio masyvu:
// a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b)Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// c)Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g)Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;



// a)Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$daugiauUz10 = 0;
foreach ($masyvas as $reiksme) {
    if ($reiksme > 10) {
        $daugiauUz10++;
    }
}

echo '<br>';

echo "Reikšmių didesnių už 10 kiekis: $daugiauUz10";

echo '<br>';
echo '<br>';
 
// b)Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$maxReiksme = max($masyvas);
$didziausiIndeksai = array_keys($masyvas, $maxReiksme);
echo "Didžiausia reikšmė: $maxReiksme, indeksai: ";
foreach ($didziausiIndeksai as $indeksas) {
    echo ($indeksas + 1) . "/ ";
}

echo '<br>';
echo '<br>';
 
// c)Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$sumaPoriniu = 0;
foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 === 0) {
        $sumaPoriniu += $reiksme;
    }
}

echo "Porinių indeksų reikšmių suma: $sumaPoriniu <br>";

echo '<br>';
echo '<br>';
 
// d)Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
$naujasMasyvas = array();
foreach ($masyvas as $indeksas => $reiksme) {
    $naujasMasyvas[$indeksas] = $reiksme - $indeksas;
}
print_r($naujasMasyvas);

echo '<br>';
echo '<br>';
 
// e)Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
for ($i = 30; $i < 40; $i++) {
    $masyvas[$i] = rand(5, 25);
}
print_r($masyvas);
echo "<br>";

echo '<br>';
echo '<br>';
 
// f)Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
$poriniai = array();
$neporiniai = array();
foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 == 0) {
        $neporiniai[] = $reiksme;
    } else {
        $poriniai[] = $reiksme;
    }
}
echo "Neporiniai indeksų elementai: ";
print_r($neporiniai);
echo "<br>";
echo "Poriniai indeksų elementai: ";
print_r($poriniai);
echo "<br>";

echo '<br>';
echo '<br>';
 
// g)Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
foreach ($masyvas as $indeksas => $reiksme) {
    if ($indeksas % 2 == 0 && $reiksme > 15) {
        $masyvas[$indeksas] = 0;
    }
}
print_r($masyvas);
echo "<br>";

echo '<br>';
echo '<br>';
 
// h)Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
$pirmasDidesnisUz10 = -1;
foreach ($masyvas as $indeksas => $reiksme) {
    if ($reiksme > 10) {
        $pirmasDidesnisUz10 = $indeksas;
        break;
    }
}
echo "Pirmas indeksas, kurio elemento reikšmė didesnė už 10: $pirmasDidesnisUz10 <br>";

echo '<br>';
echo '<br>';
 
// i)Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;


foreach ($masyvas as $key => $value) {
    if ($key % 2 == 0) {
        unset($masyvas[$key]);
    }
}

print_r($masyvas);
echo '<br>';
echo '<br>';
// 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

// $masyvas = array();

// $raides = array('A', 'B', 'C', 'D');

// for ($i = 0; $i < 200; $i++) {
//     $randomIndex = array_rand($raides);
//     $masyvas[$i] = $raides[$randomIndex];
// }

// $kiekiai = array_count_values($masyvas);

// echo "A raidžių kiekis: " . $kiekiai['A'] . "<br>";
// echo "B raidžių kiekis: " . $kiekiai['B'] . "<br>";
// echo "C raidžių kiekis: " . $kiekiai['C'] . "<br>";
// echo "D raidžių kiekis: " . $kiekiai['D'] . "<br>";

// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

// sort($masyvas);
// print_r($masyvas);

// 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$masyvas1 = array();
$masyvas2 = array();
$masyvas3 = array();

$raides = array('A', 'B', 'C', 'D');

for ($i = 0; $i < 100; $i++) {
    $randomIndex = array_rand($raides);
    $masyvas1[$i] = $raides[$randomIndex];
}

for ($i = 0; $i < 100; $i++) {
    $randomIndex = array_rand($raides);
    $masyvas2[$i] = $raides[$randomIndex];
}

for ($i = 0; $i < 100; $i++) {
    $randomIndex = array_rand($raides);
    $masyvas3[$i] = $raides[$randomIndex];
}

$sudedamiMasyvai = array_merge($masyvas1, $masyvas2, $masyvas3);
$unikaliosReiksmes = array_unique($sudedamiMasyvai);
$kiekUnikaliuReiksmiu = count($unikaliosReiksmes);

$kombinacijos = array();

foreach ($masyvas1 as $reiksme1) {
    foreach ($masyvas2 as $reiksme2) {
        foreach ($masyvas3 as $reiksme3) {
            $kombinacija = $reiksme1 . $reiksme2 . $reiksme3;
            array_push($kombinacijos, $kombinacija);
        }
    }
}

$unikaliosKombinacijos = array_unique($kombinacijos);
$kiekUnikaliuKombinaciju = count($unikaliosKombinacijos);

echo "Unikalių reikšmių kiekis: " . $kiekUnikaliuReiksmiu . "<br>";
echo "Unikalių kombinacijų kiekis: " . $kiekUnikaliuKombinaciju . "<br>";

?>

<!-- 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). -->

<?php
// Funkcija, kuri sugeneruoja unikalius atsitiktinius skaičius nuo 100 iki 999

function generate_unique_random_numbers($count) {
  $numbers = array();
  while (count($numbers) < $count) {
    $number = mt_rand(100, 999);
    if (!in_array($number, $numbers)) {
      $numbers[] = $number;
    }
  }
  return $numbers;
}

// Sugeneruojame du masyvus
$array1 = generate_unique_random_numbers(100);
$array2 = generate_unique_random_numbers(100);

// Spausdiname masyvus
print_r($array1);
echo '<br>';
echo '<br>';
print_r($array2);
echo '<br>';
echo '<br>';

// <!-- 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve. -->

// Susikuriame naują masyvą, kuriame yra reikšmės, kurios yra pirmame masyve, bet nėra antrame masyve
$unique_values = array_diff($array1, $array2);

// Spausdiname naują masyvą
echo '<br>';
echo '<br>';
print_r($unique_values);


// 8.Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

// Susikuriame naują masyvą, kuriame yra reikšmės, kurios kartojasi abiejuose masyvuose
$common_values = array_intersect($array1, $array2);

// Spausdiname naują masyvą
echo '<br>';
echo '<br>';
print_r($common_values);

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

$combined_array = array_combine($array1, $array2);

// Spausdiname naują masyvą
print_r($combined_array);


// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.


// Sukuriame 10 elementų masyvą
$array = array();

// Pridedame pirmus du atsitiktinius skaičius nuo 5 iki 25
$array[] = rand(5, 25);
$array[] = rand(5, 25);

// Skaičiuojame ir pridedame likusius skaičius
for ($i = 2; $i < 10; $i++) {
    $array[] = $array[$i-2] + $array[$i-1];
}

// Spausdiname masyvą
echo '<br>';
echo '<br>';
print_r($array);
?>

