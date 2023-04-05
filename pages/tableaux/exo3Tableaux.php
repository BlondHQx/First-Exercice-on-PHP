<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3 Tableaux</title>
</head>

<body>
    <!---Exercice 3 :
Écrivez un code PHP qui trie un tab(leau de nombres dans l'ordre croissant.
Affichez le tableau avant et après le trie avec print_r.
Essayez d'innover la façon dont vous allez créer le tableau de nombre.-->
    <main>
        <?php
            $grid = [3,6,4,15,7,42,5,8,0];
            sort($grid);
            print_r($grid);
        ?>
    </main>

</body>

</html>