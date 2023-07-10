<?php
require 'shape.php';

$Square = new Square(5);
$Rectangle = new Rectangle(10, 5);
$Triangle = new Triangle(7, 6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #181818; color: #ffffff">
<p>
    Karenin Alanı: <?= $Square->area(); ?>
    Karenin Çevresi: <?= $Square->perimeter(); ?>
</p>
<p>
    Dikdörtgenin Alanı: <?= $Rectangle->area(); ?>
    Dikdörtgenin Çevresi: <?= $Rectangle->perimeter(); ?>
</p>
<p>
    Üçgenin Alanı: <?= $Triangle->area(); ?>
    Üçgenin Çevresi: <?= $Triangle->perimeter(); ?>
</p>
</body>

</html>