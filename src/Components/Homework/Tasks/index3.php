<?php

// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.


$array = array();
for ($i = 0; $i < 10; $i++) {
    $sub_array = array();
    for ($j = 0; $j < 5; $j++) {
        $sub_array[] = rand(5, 25);
    }
    $array[] = $sub_array;
}


// 2. Naudodamiesi 1 uždavinio masyvu:
// a. Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$count = 0;
foreach ($array as $sub_array) {
    foreach ($sub_array as $value) {
        if ($value > 10) {
            $count++;
        }
    }
}
echo "Number of elements greater than 10: " . $count . "<br>";


// b. Raskite didžiausio elemento reikšmę;

$max = 0;
foreach ($array as $sub_array) {
    $sub_max = max($sub_array);
    if ($sub_max > $max) {
        $max = $sub_max;
    }
}
echo "Maximum element value: " . $max . "<br>";


// c. Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$sums = array(0, 0, 0, 0, 0);
foreach ($array as $sub_array) {
    for ($i = 0; $i < count($sub_array); $i++) {
        $sums[$i] += $sub_array[$i];
    }
}
echo "Sums of sub-array values with the same index: ";
print_r($sums);
echo "<br>";


// d. Visus antro lygio masyvus “pailginkite” iki 7 elementų

foreach ($array as &$sub_array) {
    $sub_array = array_pad($sub_array, 7, 0);
}
unset($sub_array);
echo "Extended array: ";
print_r($array);
echo "<br>";


// e. Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

$new_array = array();
foreach ($array as $sub_array) {
    $sum = array_sum($sub_array);
    $new_array[] = $sum;
}
echo "New array with sums of sub-array values: ";
print_r($new_array);
echo "<br>";

// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu 
// kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 
// Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$array = array();
for ($i = 0; $i < 10; $i++) {
    $sub_array = array();
    $length = rand(2, 20);
    for ($j = 0; $j < $length; $j++) {
        $sub_array[] = chr(rand(65, 90)); // random uppercase letter
    }
    $array[] = $sub_array;
}

// Sort sub-arrays by alphabetical order
foreach ($array as &$sub_array) {
    sort($sub_array);
}
unset($sub_array);

// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių 
// masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

usort($array, function ($a, $b) {
    $a_length = count($a);
    $b_length = count($b);
    if (in_array('K', $a)) {
        $a_length -= 100; // arbitrary value to give priority to 'K' arrays
    }
    if (in_array('K', $b)) {
        $b_length -= 100;
    }
    return $a_length - $b_length;
});

print_r($array);

// 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
// [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius 
// nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

// Generate array with random user_id and place_in_row values
$array = array();
for ($i = 0; $i < 30; $i++) {
    $array[] = array(
        'user_id' => rand(1, 1000000),
        'place_in_row' => rand(0, 100)
    );
}

// 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
// Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.


// Sort array by user_id ascending
usort($array, function ($a, $b) {
    return $a['user_id'] - $b['user_id'];
});

// Sort array by place_in_row descending
usort($array, function ($a, $b) {
    return $b['place_in_row'] - $a['place_in_row'];
});

// 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: 
// name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

// Add name and surname to each sub-array
foreach ($array as &$sub_array) {
    $name_length = rand(5, 15);
    $surname_length = rand(5, 15);
    $sub_array['name'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $name_length);
    $sub_array['surname'] = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $surname_length);
}
unset($sub_array);

// Print final sorted and modified array
print_r($array);

// 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
// generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
// Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
// atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

$array = [];
for ($i = 0; $i < 10; $i++) {
  $innerArray = [];
  $length = rand(0, 5);
  for ($j = 0; $j < $length; $j++) {
    $innerArray[] = rand(0, 10);
  }
  $array[] = $length == 0 ? rand(0, 10) : $innerArray;
}

// Funkcija, kuri skaičiuoja masyvo reikšmių sumą, jeigu reikšmė yra masyvas
function arraySum($array) {
  $sum = 0;
  foreach ($array as $value) {
    if (is_array($value)) {
      $sum += array_sum($value);
    } else {
      $sum += $value;
    }
  }
  return $sum;
}

// 9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, 
// kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

usort($array, function($a, $b) {
    if (is_array($a) && is_array($b)) {
      return arraySum($a) <=> arraySum($b);
    } else {
      return $a <=> $b;
    }
  });
  
  // Spausdiname masyvą
print_r($array);
  
  // Skaičiuojame masyvo reikšmių sumą
  $sum = 0;
  foreach ($array as $value) {
    if (is_array($value)) {
      $sum += array_sum($value);
    } else {
      $sum += $value;
    }
  }
  echo "Masyvo reikšmių suma: $sum";


// 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro 
// lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš 
// atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva 
// formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.

$array = [];
for ($i = 0; $i < 10; $i++) {
  $subarray = [];
  for ($j = 0; $j < 10; $j++) {
    $subarray[] = [
      'value' => substr('#%+*@裡', rand(0, 6), 1),
      'color' => '#' . str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, '0', STR_PAD_LEFT)
    ];
  }
  $array[] = $subarray;
}

// Spausdinamas kvadratas
echo '<table>';
foreach ($array as $row) {
  echo '<tr>';
  foreach ($row as $cell) {
    echo '<td style="background-color: ' . $cell['color'] . ';">' . $cell['value'] . '</td>';
  }
  echo '</tr>';
}
echo '</table>';


?>