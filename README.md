# TP02-PHP-Achraf-Zehouani
 TP 02 PHP — Programmation Web 2 — 2026/2027.

# TP 02 PHP — Programmation Web 2 — 2026/2027

- Nom et Prénom : Achraf Zehouani 
- Groupe : 3
- Titre du TP : TP 02 PHP — Programmation Web

## Liste des exercices
- `ex01.php` : Balises, HTML/PHP, commentaires, echo.
- `ex02.php` : Variables, casse, concaténation, opérateur .=.
- `ex03.php` : Constantes, calculs, affectation composée.
- `ex04.php` : Types (int, float, string, bool, null) et conversions.
- `ex05.php` : Structures conditionnelles if / elseif / else.
- `ex06.php` : Structure switch, case, break, default et date().
- `ex07.php` : Boucles for et boucles imbriquées (table de multiplication et pyramide).
- `ex08.php` : Contrôle des itérations (while, do-while, continue, break).
- `ex09.php` : Tableaux associatifs et foreach.
- `ex10_get.html` / `ex10_get.php` : Formulaire et traitement avec la méthode GET.
- `ex10_post.html` / `ex10_post.php` : Formulaire et traitement avec la méthode POST.

---

Ce README explique les notions utilisées dans les exercices `ex01.php` à `ex09.php`, ainsi que les vérifications importantes.

## Exercice 1 — Balises PHP, HTML, commentaires et `echo`

### Objectif
Créer une page HTML contenant du code PHP.

### Notions utilisées

#### 1. Balises PHP
Le code PHP est écrit entre :

```php
<?php
    // code PHP
?>
```

#### 2. `echo`
`echo` permet d'afficher du texte dans la page :

```php
echo "Bienvenue dans mon TP PHP";
```

#### 3. Commentaire sur une ligne
On utilise `//` :

```php
// Ceci est un commentaire sur une ligne
```

#### 4. Commentaire sur plusieurs lignes
On utilise `/* ... */` :

```php
/*
Ceci est un commentaire
sur plusieurs lignes
*/
```

#### 5. Syntaxe courte
La syntaxe :

```php
<?= "Fin de l'exercice"; ?>
```

est une forme courte de :

```php
<?php echo "Fin de l'exercice"; ?>
```

### À retenir
PHP peut être mélangé avec du HTML. Le serveur exécute le PHP puis envoie le résultat au navigateur.

---


### Exercice 2 : Différence entre `$note` et `$Note` et noms valides

### Objectif
Manipuler des variables et construire une phrase.

### Déclaration de variables

En PHP, une variable commence par `$` :

```php
$nom = "El Amrani";
$prenom = "Yassine";
$age = 20;
$formation = "Informatique";
```

### Concaténation avec `.`

L'opérateur `.` permet de joindre plusieurs chaînes :

```php
$presentation = "Je m'appelle " . $prenom . " " . $nom;
```

### Opérateur `.=` 

`.=` ajoute du texte à une chaîne déjà existante :

```php
$presentation .= " J'apprends PHP.";
```

C'est équivalent à :

```php
$presentation = $presentation . " J'apprends PHP.";
```

- **Pourquoi `$note` et `$Note` sont différentes ?**  
  PHP est un langage sensible à la casse (case-sensitive) pour les noms de variables. Par conséquent, `$note` et `$Note` sont traitées comme deux variables totalement distinctes.
- **Noms de variables valides parmi la liste :**
  - `$a` : Valide
  - `$_a` : Valide
  - `$a_a` : Valide
  - `$AAA` : Valide
  - `$a!` : Invalide (contient un caractère spécial `!`)
  - `$1a` : Invalide (commence par un chiffre)
  - `$a1` : Valide
  
### Règle
Après `$`, un nom de variable doit commencer par une lettre ou `_`. Ensuite, il peut contenir des lettres, chiffres et `_`.

---


## Exercice 3 — Constantes, calculs et affectation composée

### Objectif
Utiliser des constantes, faire des calculs et utiliser `+=`.

### Constantes

```php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");
```

Une constante garde la même valeur pendant l'exécution du programme.

Contrairement à une variable, elle ne commence pas par `$`.

### Données

```php
$prixUnitaireHT = 60;
$quantite = 3;
```

### Total HT

```php
$totalHT = $prixUnitaireHT * $quantite;
```

Calcul :

```text
60 × 3 = 180 MAD
```

### Montant de TVA

```php
$montantTVA = $totalHT * TAUX_TVA / 100;
```

Calcul :

```text
180 × 20 / 100 = 36 MAD
```

### Total TTC

```php
$totalTTC = $totalHT + $montantTVA;
```

Calcul :

```text
180 + 36 = 216 MAD
```

### Frais de livraison avec `+=`

```php
$totalTTC += 15;
```

C'est équivalent à :

```php
$totalTTC = $totalTTC + 15;
```

Montant final :

```text
216 + 15 = 231 MAD
```

### Vérifier une constante avec `defined()`

```php
defined("TAUX_TVA")
```

Cette fonction renvoie `true` si la constante existe.

### Résultats attendus

```text
Total HT : 180 MAD
TVA : 36 MAD
Total TTC : 216 MAD
Montant final : 231 MAD
```
---


### Exercice 4 : Affichage de `false`
## Exercice 4 — Types et conversions

### Objectif
Comprendre les types de données PHP et les conversions.

### Types utilisés

```php
$var1 = 42;
$var2 = "42";
$var3 = 15.8;
$var4 = true;
$var5 = false;
$var6 = null;
```

Types correspondants :

```text
42       → int
"42"     → string
15.8     → float
true     → bool
false    → bool
null     → NULL
```

### `var_dump()`

`var_dump()` affiche le type et la valeur :

```php
var_dump($var1);
```

Résultat :

```text
int(42)
```

Il est pratique de placer les résultats dans `<pre>` pour garder une présentation lisible :

```html
<pre>
...
</pre>
```

### Conversion de `"42"` en entier

```php
$chaineVersEntier = (int) $var2;
```

Résultat :

```text
int(42)
```

### Conversion de `15.8` en entier

```php
$decimalVersEntier = (int) $var3;
```

Résultat :

```text
int(15)
```

La partie décimale est supprimée.

### Conversion de `42` en chaîne

```php
$entierVersChaine = (string) $var1;
```

Résultat :

```text
string(2) "42"
```

### Différence entre `echo` et `var_dump()` pour les booléens

Avec :

```php
echo true;
```

PHP affiche :

```text
1
```

Avec :

```php
echo false;
```

PHP n'affiche rien.

Avec :

```php
var_dump(true);
var_dump(false);
```

PHP affiche :

```text
bool(true)
bool(false)
```

`var_dump()` est donc plus précis pour examiner une variable.

### Conversion en booléen

```text
(bool) 0       → false
(bool) "0"     → false
(bool) "PHP"   → true
(bool) []      → false
```

---

## Exercice 5 — Conditions `if`, `elseif`, `else`

### Objectif
Afficher une mention selon une moyenne.

### Vérification d'une note valide

Une moyenne doit être comprise entre 0 et 20 :

```php
if ($moyenne < 0 || $moyenne > 20)
```

L'opérateur `||` signifie **OU**.

Si la moyenne est inférieure à 0 ou supérieure à 20 :

```text
Note invalide
```

### Mentions

```text
Moyenne < 10       → Non validé
10 <= moyenne < 12 → Passable
12 <= moyenne < 14 → Assez bien
14 <= moyenne < 16 → Bien
16 <= moyenne <=20 → Très bien
```

### Tests effectués

- **-1** : « Note invalide »
- **9** : « Non validé »
- **10** : « Passable »
- **12** : « Assez bien »
- **14** : « Bien »
- **16** : « Très bien »
- **21** : « Note invalide »

### Important
Il faut vérifier les valeurs invalides avant les mentions. Sinon une note comme `21` pourrait être classée incorrectement.

---

## Exercice 6 — `switch`, `case`, `break`, `default`, `date()`

### Objectif
Afficher le nom d'un mois à partir de son numéro.

### Structure `switch`

```php
switch ($numeroMois) {
        case 1: $mois = "Janvier"; break;
        case 2: $mois = "Février"; break;
        case 3: $mois = "Mars"; break;

        default: $mois = "Numéro de mois invalide"; break;
}
```

### `case`
Chaque `case` correspond à une valeur possible.

### `break`
`break` arrête le `switch` après avoir trouvé le bon cas.

### `default`
`default` est exécuté lorsqu'aucun `case` ne correspond.

### Tests

```text
1  → Janvier
3  → Mars
12 → Décembre
15 → Numéro de mois invalide
```

### Mois courant avec `date()`

```php
$numeroMois = (int) date("m");
```

`date("m")` retourne le numéro du mois courant entre `"01"` et `"12"`.

Le `(int)` transforme cette chaîne en entier.

Exemple :

```text
"03" → 3
```

---

## Exercice 7 — Boucle `for` et boucles imbriquées

### Partie 1 — Table de multiplication

```php
$nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<p>" . $nombre . " x " . $i . " = " . $resultat . "</p>";
        }
```

### Fonctionnement d'une boucle `for`

```php
for (initialisation; condition; modification)
```

Dans :

```php
for ($i = 1; $i <= 10; $i++)
```

- `$i = 1` : valeur de départ
- `$i <= 10` : condition
- `$i++` : ajoute 1 après chaque tour

La table se termine par :

```text
7 × 10 = 70
```

### Partie 2 — Pyramide

Deux boucles sont imbriquées :

```php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
```

La boucle extérieure contrôle les lignes.

La boucle intérieure contrôle le nombre d'étoiles.

Résultat :

```text
*
**
***
****
*****
******
```

Il y a exactement six lignes.

---


## Exercice 8 — `while`, `do-while`, `continue`, `break`

### Partie 1 — Nombres pairs de 0 à 20

```php
$i = 0;

while ($i <= 20) {
    ...
    $i += 2;
}
```

`while` répète les instructions tant que la condition reste vraie.

L'incrément de 2 permet d'obtenir uniquement les nombres pairs.

Résultat :

```text
0
2
4
6
8
10
12
14
16
18
20
```

Le nombre `10` est affiché en gras avec :

```php
<b>10</b>
```

### Partie 2 — Différence entre `while` et `do-while`

On initialise :

```php
$compteur = 5;
```

Condition :

```php
$compteur < 5
```

#### Avec `while`

```php
while ($compteur < 5) {
    ...
}
```

La condition est testée avant le corps.

Comme `5 < 5` est faux, le corps ne s'exécute jamais.

Résultat :

```text
0 exécution
```

#### Avec `do-while`

```php
do {
    ...
} while ($compteur < 5);
```

Le corps est exécuté avant de tester la condition.

Il s'exécute donc une fois même si la condition est fausse.

Résultat :

```text
1 exécution
```

### Partie 3 — `continue` et `break`

#### `continue`

```php
if ($i % 3 == 0) {
    continue;
}
```

`$i % 3 == 0` signifie que `$i` est divisible par 3.

`continue` ignore le reste du tour actuel et passe au suivant.

Les multiples de 3 ne sont donc pas affichés.

#### `break`

```php
if ($i == 16) {
    break;
}
```

`break` arrête complètement la boucle.

Comme le test est effectué avant `echo`, `16` n'est pas affiché.

Résultat :

```text
1
2
4
5
7
8
10
11
13
14
```

Ni les multiples de 3, ni 16, ni les valeurs supérieures à 16 ne sont affichés.

---

## Exercice 9 — Tableau associatif et `foreach`

### Objectif
Manipuler un tableau d'étudiants et calculer des statistiques.

### Tableau associatif

```php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
```

Dans ce tableau :

- la clé représente le nom de l'étudiant ;
- la valeur représente sa note.

### Parcours avec `foreach`

```php
foreach ($notes as $nom => $note) {
    ...
}
```

À chaque tour :

- `$nom` reçoit le nom de l'étudiant ;
- `$note` reçoit sa note.

### Validation

```php
if ($note >= 10) {
    $resultat = "Validé";
} else {
    $resultat = "Non validé";
}
```

Le seuil de validation est `10`.

Résultats :

```text
Amine   12 → Validé
Sara    16 → Validé
Youssef  8 → Non validé
Lina    14 → Validé
Adam    10 → Validé
```

### Somme des notes

On initialise :

```php
$somme = 0;
```

Puis :

```php
$somme += $note;
```

Calcul :

```text
12 + 16 + 8 + 14 + 10 = 60
```

### Moyenne

```php
$moyenne = $somme / count($notes);
```

Il y a 5 étudiants :

```text
60 / 5 = 12
```

La moyenne de la classe est donc :

```text
12
```

### Compter les étudiants validés

À chaque note supérieure ou égale à 10 :

```php
$nbValides++;
```

Il y a :

```text
4 étudiants validés
```

### Chercher la meilleure note

On compare chaque note :

```php
if ($note > $meilleureNote) {
    $meilleureNote = $note;
    $meilleurEtudiant = $nom;
}
```

Résultat :

```text
Meilleure note : 16
Étudiante : Sara
```

### Vérification finale

```text
Somme des notes : 60
Moyenne : 12
Étudiants validés : 4
Meilleure note : 16
Meilleure étudiante : Sara
```

## Exercice 10 : Formulaires et Traitement (GET vs POST et Sécurité)

Cet exercice permet de manipuler la transmission de données via les formulaires HTML en PHP à travers deux méthodes (GET et POST), tout en appliquant des vérifications de sécurité côté serveur.

### Fichiers du projet :
- `Exer10_get.html` : Formulaire HTML utilisant la méthode GET.
- `Exer10_get.php` : Page de traitement des données GET.
- `Exer10_post.html` : Formulaire HTML utilisant la méthode POST.
- `Exer10_post.php` : Page de traitement des données POST.

---

### 1. Partie A — Méthode GET
- **Fonctionnement :** Le formulaire envoie les champs `nom`, `prenom` et le menu déroulant `groupe` (G1, G2, G3, G4) vers le fichier `Exer10_get.php`.
- **Observation de l'URL :** 
  Les valeurs saisies apparaissent **directement visibles dans l'URL** du navigateur sous forme de chaîne de requête (query string) après un point d'interrogation `?` (Exemple : `Exer10_get.php?nom=Ali&prenom=Ahmed&groupe=G1`).

---

### 2. Partie B — Méthode POST
- **Fonctionnement :** Le second formulaire transmet les mêmes données à `Exer10_post.php` via la méthode POST.
- **Comparaison de l'URL :** 
  Contrairement à la méthode GET, l'URL de la page de traitement (`Exer10_post.php`) **reste propre et ne contient aucune donnée visible**, car les informations sont transmises de manière invisible et sécurisée dans le corps (body) de la requête HTTP.

---

### 3. Partie C — Vérifications et Sécurité PHP
- **Validation des champs :** 
  Utilisation combinée de `isset()` pour vérifier l'existence des clés et de `trim() !== ''` pour s'assurer que les champs ne sont pas vides ou composés uniquement d'espaces.
- **Gestion de l'accès direct :** 
  Si les pages de traitement sont ouvertes directement dans le navigateur sans soumettre le formulaire, le script affiche un message explicatif propre au lieu de déclencher l'avertissement PHP *« Undefined array key »*.
- **Protection contre les failles XSS :** 
  Toutes les données saisies par l'utilisateur sont systématiquement échappées avant leur affichage dans la page HTML à l'aide de la fonction `htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8')`.