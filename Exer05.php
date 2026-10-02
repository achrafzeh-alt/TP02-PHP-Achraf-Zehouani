<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 05:</title>
</head>
<body>

<?php

$moyenne = 16;

if ($moyenne < 0 || $moyenne > 20) {
    echo "Note invalide";
} elseif ($moyenne < 10) {
    echo "Non validé";
} elseif ($moyenne < 12) {
    echo "Passable";
} elseif ($moyenne < 14) {
    echo "Assez bien";
} elseif ($moyenne < 16) {
    echo "Bien";
} else {
    echo "Très bien";
}

?>

</body>
</html>
