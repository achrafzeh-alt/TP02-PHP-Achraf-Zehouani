<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <?php
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) && 
        trim($_POST['nom']) !== '' && 
        trim($_POST['prenom']) !== '' && 
        trim($_POST['groupe']) !== '') {
        
        $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
        $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
        $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');

        echo "<p>Bienvenue " . $prenom . " " . $nom . ", vous êtes dans le groupe " . $groupe . ".</p>";
    } else {
        if (isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['groupe'])) {
            echo "<p>Erreur : Veuillez remplir tous les champs du formulaire (les valeurs vides ne sont pas acceptées).</p>";
        } else {
            echo "<p>Veuillez soumettre le formulaire pour afficher les informations (accès direct sans soumission).</p>";
        }    }
    ?>
</body>
</html>