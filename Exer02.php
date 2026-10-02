<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02:</title>
</head>
<body>
    <?php
    $nom = "Fertlan";
    $prenom = "Ahmed";
    $age = 20;
    $formation = "Informatique";
    
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";
    echo "<p>" . $phrase . "</p>";
    $phrase .= " J'apprends PHP.";
    echo "<p>" . $phrase . "</p>";

    $note = 12;
    $Note = 16;
    echo "<p>Valeur de \$note : " . $note . "</p>";
    echo "<p>Valeur de \$Note : " . $Note . "</p>";
    ?>
</body>
</html>