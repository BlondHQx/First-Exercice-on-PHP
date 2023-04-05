<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3 Boucles</title>
</head>

<body>

<!----Exercice 3 :
Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé continue pour
 ignorer les
nombres négatifs. Affichez tous les nombres entiers.---->
    <main>
        <?php
        $grid = [-1, 1, 2, -2, -3, 3, -4, 4, -5, 5];
        for ($i = 0; $i < count($grid); $i++) {
            if ($grid[$i] < 0) {
                continue;
            }
            echo $grid[$i];
        }
        ?>
    </main>
</body>

</html>