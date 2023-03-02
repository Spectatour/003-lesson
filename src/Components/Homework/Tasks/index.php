<!-- 1. Kintamieji ir sąlygos -->
<!-- 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
 -->
<?php

$vardas = "John";
$pavarde = "Doe";
$gimimoMetai = 1992;
$sieMetai = 2023;

$amzius = $sieMetai - $gimimoMetai;

echo '<br>';
// echo "As esu $vardas $pavarde. Man yra $amzius";

// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
// Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.


$jonas = rand(0, 4);
$petras = rand(0, 4);

if ($petras != 0 && $jonas != 0) {
    if ($jonas > $petras) {
        $rezultatas = $jonas / $petras;
        echo round($rezultatas, 2);
    } elseif ($jonas < $petras) {
        $rezultatas = $petras / $jonas;
        echo round($rezultatas, 2);
    } elseif ($jonas == $petras){
        $rezultatas = $petras / $jonas;
        echo $rezultatas;
    }else {
        echo "negalima dalinti iš 0";
    }
} else {
    echo "reikšmės negali būti lygios 0";
}


echo '<br>';
echo '<br>';
// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.


$one = rand(0, 25);
$two = rand(0, 25);
$three = rand(0, 25);

if ($one > $two && $one < $three) {
    echo "Vidurinis kintamasis yra one = $one";
  } elseif ($two > $one && $two < $three) {
    echo "Vidurinis kintamasis yra two = $two";
  } else {
    echo "Vidurinis kintamasis yra three = $three";
  };
  
echo '<br>';
echo "Kintamieji $one / $two / $three";
echo '<br>';
echo '<br>';
// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
// Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
  echo "Galima sudaryti trikampį su kraštinėmis: $a, $b, $c.";
} else {
  echo "Negalima sudaryti trikampio su kraštinėmis: $a, $b, $c.";
}
echo '<br>';
echo '<br>';

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).


$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

$zeros = 0;
$ones = 0;
$twos = 0;

if ($a == 0) {
    $zeros++;
} elseif ($a == 1) {
    $ones++;
} else {
    $twos++;
}

if ($b == 0) {
    $zeros++;
} elseif ($b == 1) {
    $ones++;
} else {
    $twos++;
}

if ($c == 0) {
    $zeros++;
} elseif ($c == 1) {
    $ones++;
} else {
    $twos++;
}

if ($d == 0) {
    $zeros++;
} elseif ($d == 1) {
    $ones++;
} else {
    $twos++;
}

echo "a: $a, b: $b, c: $c, d: $d<br>";
echo "zeros: $zeros, ones: $ones, twos: $twos";

echo '<br>';
echo '<br>';

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
// ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$result = rand(1, 6);

echo "<h3>$result</h3>";

echo '<br>';
echo '<br>';

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
// Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

if ($a < 0) {
    $spalva1 = 'green';
} elseif ($a > 0) {
    $spalva1 = 'blue';
} else {
    $spalva1 = 'red';
}

if ($b < 0) {
    $spalva2 = 'green';
} elseif ($b > 0) {
    $spalva2 = 'blue';
} else {
    $spalva2 = 'red';
}

if ($c < 0) {
    $spalva3 = 'green';
} elseif ($c > 0) {
    $spalva3 = 'blue';
} else {
    $spalva3 = 'red';
}

echo "<h1 style='color:$spalva1'>$a</h1>";
echo "<h1 style='color:$spalva2'>$b</h1>";
echo "<h1 style='color:$spalva3'>$c</h1>";

echo '<br>';
echo '<br>';

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
// daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir 
// atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$zvakes = rand (5, 3000);
$kaina = $zvakes * 1;

if ($kaina > 2000){
    $nuolaida = 0.04;
} elseif ($kaina > 1000) {
    $nuolaida = 0.03;
} else {
    $nuolaida = 0;
}

$galutineKaina = $kaina * (1 - $nuolaida);

echo "Perkant $zvakes zvakiu, kaina butu $kaina$, taciau su nuolaida $galutineKaina$";

echo '<br>';
echo '<br>';

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
// Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
// kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.


$skaicius1 = rand(0, 100);
$skaicius2 = rand(0, 100);
$skaicius3 = rand(0, 100);

$vidurkis = ($skaicius1 + $skaicius2 + $skaicius3) / 3;

$skaiciai = array($skaicius1, $skaicius2, $skaicius3);

$skaiciai_filtruoti = array_filter($skaiciai, function($skaicius) {
    return ($skaicius >= 10 && $skaicius <= 90);
});

$vidurkis2 = array_sum($skaiciai_filtruoti) / count($skaiciai_filtruoti);

$vidurkis_rounded = round($vidurkis);
$vidurkis2_rounded = round($vidurkis2);

echo 'Triju skaiciu vidurkis: ' . $vidurkis_rounded . "\n";
echo "vidurkis atmetus skaicius: " . $vidurkis2_rounded;

echo '<br>';
echo '<br>';

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
// Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
// Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
// Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

$papildomosSekundes = rand(0, 300);

$timestamp = strtotime("+$papildomosSekundes seconds", strtotime("$hours:$minutes:$seconds"));


$laikasPries = date('H:i:s', strtotime("$hours:$minutes:$seconds"));
$laikasPo = date('H:i:s', $timestamp);

echo "Time before: $laikasPries\n";
echo "Time after:  $laikasPo\n";
echo "Additional seconds: $papildomosSekundes\n";