<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 04:</title>
</head>
<body>
    <h2>1- Types et valeurs </h2>
    <?php
    $var1 = 42;
    $var2 = "42";
    $var3 = 15.8;
    $var4 = true;
    $var5 = false;
    $var6 = null;

    echo "<pre>";
    var_dump($var1, $var2, $var3, $var4, $var5, $var6);
    echo "</pre>";
?>
<h2>2- Conversion </h2>
<?php
$chaineVersEntier = (int) $var2;
$decimalVersEntier = (int) $var3;
$entierVersChaine = (string) $var1;

echo "<pre>";
echo "\"42\" vers entier : ";
var_dump($chaineVersEntier);

echo "15.8 vers entier : ";
var_dump($decimalVersEntier);

echo "42 vers chaîne : ";
var_dump($entierVersChaine);
echo "</pre>";
?>

<h2>3- Boolean avec echo</h2>
<?php
echo "var4 avec echo: " . $var4 . "<br>";
echo "var5 avec echo: " . $var5 . "<br>";
?>  

<h2>4- Boolean avec var_dump</h2>
<?php

echo "<pre>";

echo "true: ";
var_dump($var4);
echo "false: ";
var_dump($var5);
echo "</pre>";
?>

<h2>5- Conversion en boolean</h2>
<?php
$b0=(bool) 0;
$b1=(bool) "0";
$b2=(bool) "php";
$b3=(bool) [];

echo "<pre>";

echo "0 en bool: ";
var_dump($b0);

echo "chaine '0' en bool: ";
var_dump($b1);

echo "chaine 'php' en bool: ";
var_dump($b2);

echo "tableau vide en bool: ";
var_dump($b3);
echo "</pre>";
?>

</body>
</html>