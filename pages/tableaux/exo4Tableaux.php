<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4 Tableaux</title>
</head>
<body>
    <!---Exercice 4 :
Écrivez un code PHP qui calcule la somme et la moyenne des éléments d'un tableau de nombres (généré aléatoirement).
Affichez le tableaux, la somme et la moyenne.-->
    <main>
    <?php
        $grid = [rand(0,4),rand(4,8),rand(8,12)];
        echo(array_sum($grid));
        echo(array_sum($grid)/count($grid));
    ?>
    </main>
    
</body>
</html>