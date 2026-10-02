<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 08:</title>
</head>
<body>
    <h2>Partie 1: Nombres pairs</h2>
    <?php
    $i=0;
    while($i<=20){
        if($i==10){
            echo "<b>" . $i . "</b><br>";
        }
        else{
            echo $i . "<br>";
        }
        $i += 2;
    }
    ?>
    <br>
    
    <h2>Partie 2: While/Do-While</h2>
    
    <?php
    //while
    $computer = 5;
    $execwhile = 0;
    while($computer < 5){
        $execwhile++;
        $computer++;
    }
    echo "Nombre d'exécutions de la boucle while: " . $execwhile . "<br>";
    ?>
    <br>

    <?php
    //do-while
    $computer = 5;
    $execdowhile = 0;
    do{
        $execdowhile++;
        $computer++;
    }while($computer < 5);
    echo "Nombre d'exécutions de la boucle do-while: " . $execdowhile . "<br>";
    ?>
    <br>

    <h2>Partie 3: Continue et Break</h2>
    
    <?php
    for($i=1; $i<=20; $i++){
        if($i==16){
            break;
        }
        if($i%3==0){
            continue;
        }
        echo $i . "<br>";
    }

    ?>
</body>
</html>