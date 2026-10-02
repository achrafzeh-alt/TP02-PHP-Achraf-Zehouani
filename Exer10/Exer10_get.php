
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement GET</title>
</head>
<body>
    <?php
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) && 
        trim($_GET['nom']) !== '' && 
        trim($_GET['prenom']) !== '' && 
        trim($_GET['groupe']) !== '') {
        
        $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<p>Bienvenue " . $prenom . " " . $nom . ", vous êtes dans le groupe " . $groupe . ".</p>";
    } else {
        if (isset($_GET['nom']) || isset($_GET['prenom']) || isset($_GET['groupe'])) {
            echo "<p>Erreur : Veuillez remplir tous les champs du formulaire (les valeurs vides ne sont pas acceptées).</p>";
        } else {
            echo "<p>Veuillez soumettre le formulaire pour afficher les informations (accès direct sans soumission).</p>";
        }
    }
    ?>
</body>
</html>