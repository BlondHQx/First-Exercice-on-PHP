<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2 Boucles</title>
</head>

<body>
    <!---Exercices 2 : Utilisez la boucle foreach pour parcourir un tableau 
    d'entiers et afficher la somme de tous les éléments du tableau.-->
    <main>
        <?php
        $grid = ["1 moutons", " 2 moutons", " 3 moutons", " 4 moutons", " 5 moutons", " 6 moutons", " 7 moutons", " 8 moutons", " 9 moutons", " 10 moutons"];
        foreach ($grid as $value) {
            echo $value;
        }
        ?>
    </main>
</body>

</html>