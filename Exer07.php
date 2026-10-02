<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 07:</title>
</head>
<body>
    <section>
        <h2>Table de multiplicaition</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<p>" . $nombre . " x " . $i . " = " . $resultat . "</p>";
        }
        ?>
    </section>
    <br>
    <section>
        <h2>Pyramide d'étoiles</h2>
        <?php
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </section>

</body>
</html>