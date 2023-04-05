<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4 Boucles</title>
</head>
<body>
    <!----Exercice 4 :
Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé break lorsqu'un nombre
spécifique est trouvé pour sortir de la boucle.---->
<main>
    <main>
        <?php
            $grid = [-1, 1, 2, -2, -3, 3, -4, 4, -5, 5];
            for ($i = 0; $i < count($grid); $i++) {
                if ($grid[$i] = 5) {
                    echo$grid[$i];
                    break;
                }
            }
        ?>
    </main>
</body>
</html>