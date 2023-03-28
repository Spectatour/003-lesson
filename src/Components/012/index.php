<?php

$animal = 'bebras';

$animal2 = 'barsukas';

function go(&$a)
{
    global $animal; // blogas istorinis palikimas

    $hello = 'Labukas';
    // echo $animal;

    $a = 'Dramblys';

    echo $a;
}

go($animal2);

echo $animal2;

function fun($vienas, $du) 
{
    return $vienas * $du;
}

function fun2(...$all) 
{
    $count = 1;
    foreach ($all as $value) {
        $count = $count * $value;
    }
    return $count;
}

$result = fun(11, 5);
$result = fun2(11, 2, 2, 10);

$arg = [14, 22];
$result = fun(...$arg);

echo "<h1>$result</h1>";

////////////////////////////////////////////////

function fun3()
{
    static $counter = 0;

    return ++$counter;
}
$result = fun3();
echo "<h1>$result</h1>";
$result = fun3();
echo "<h1>$result</h1>";
$result = fun3();
echo "<h1>$result</h1>";

////////////////////////////////////////////////

$fun4 = function()
{
    return '<h1 style="color: coral";>*****</h1>';
};

$result = $fun4();
echo $result;



function fun5($fun)
{
    return $fun();
}

$result = fun5($fun4);
$result = fun5(function()
{
    return '<h1 style="color: coral";>*****</h1>';
});
echo $result;

$fun6 = fn() => '<h1 style="color: coral";>*****</h1>';

$result = fun5($fun6);

echo $result;