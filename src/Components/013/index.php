<?php

session_start();
setcookie('animal', 'RACOON', time() +3600);

// POST Scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


   $_SESSION['animal'] = $_POST['animal'];
   $_SESSION['magic_number'] = $_POST['magic_number'];

    header('location: http://localhost/Chupakabra/my-app/src/Components/013/' ); 
    die;
};

// GET scenarijus
    $animal = $_SESSION['animal'] ?? '';
    $mn = $_SESSION['magic_number'] ?? '';
    unset($_SESSION['magic_number'], $_SESSION['animal']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>013</h1>
    <h2><?=$animal ?> <?=$mn ?></h2>
    <form action= "" method="post">
        <input type="text" name="animal">
        <br>
        <input type="range" min="0" max="10" value="0" name="magic_number">
        <br>
        <button type="submit" name="">GO</button>
    </form>
</body>
</html>

