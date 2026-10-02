<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 01:</title>
</head>
<body>
    <?php
    //Affichage du message de bienvenue requis
    echo "Bienvenue dans mon TP PHP<br>";
    /*
      Déclaration et affichage des informations personnelles fictives 
      ainsi que du groupe de TP.
    */
    $nom = "Zehouani";
    $prenom = "Achraf";
    $groupe = "Groupe 3";

    echo "Nom et Prénom : " . $prenom . " " . $nom . "<br>";
    echo "Groupe : " . $groupe . "<br>";
    ?>

    <!-- Phrase affichée avec la syntaxe courte -->
    <p><?= "Ceci est affiché grâce à la syntaxe courte PHP !" ?></p>
</body>
</html>